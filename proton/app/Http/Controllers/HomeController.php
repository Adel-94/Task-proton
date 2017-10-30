<?php

namespace App\Http\Controllers;
/*use Illuminate\Validation\Validator;*/
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use App\Models\advert_type;
use App\Models\prop_type;
use App\Models\advert;
use App\Models\city;
use App\Models\district;
use App\Models\station;
use App\Models\subway;
use App\Models\author;
use App\Models\gallery;
use App\Models\announcer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
     /*$this->middleware('auth');*/

      return view('home');
    }

    public function adv(){

      

        $advert_type  = advert_type::all();

        $prop_type = prop_type::all();

        $city= city::all();

        $author= author::all();

        $announcer =announcer::all();

        return view ('welcome',compact('advert_type','prop_type','city','author','announcer'));

    }
    
    public function findDistrict(Request $request){

        $data=district::select('distr_name','id')->where('city_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success


    }
    public function findStation (Request $request) {
        $data_station = station::select('station_name','id')->where('distr_id',$request->id)->get();
        return response()->json($data_station);
    }
   
    public function findSubway(Request $request){
        
        $data_subway = subway::select('sub_name','id')->where('city_id',$request->id)->get();

        return response()->json($data_subway);
    }
    


    public function save(Request $request){
            $request->validate([
            'auth_name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:author',
            'name'=>'required',
            'prop_name'=>'required',
            'announcer_type'=>'required',
            'prop_price'=>'required',
            'prop_area'=>'required',
            'prop_quantity'=>'required',
        ]);
       
       if($request->hasFile('file')){
    

        //insert to author table

        $save_auth=author::create([
            'auth_name' => $request->auth_name,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);


         //insert to advert table
             $data['adv_type_id']=$request->name;
             $data['prop_type_id']=$request->prop_name;
             $data['announcer_id']=$request->announcer_type;
             $data['city_id']=$request->city_name;
             $data['distr_id']=$request->distr_name;
             $data['station_id']=$request->station_name;
             $data['subway_id']=$request->sub_name;
             $data['prop_price']=$request->prop_price;
             $data['prop_area']=$request->prop_area;
             $data['prop_quantity']=$request->prop_quantity;
             $data['author_id']=$save_auth->id;
             $data['active']=false;
             $request->merge(['active' => false]);
             $save_advert= advert::create($data);

       
        //insert to gallery table
         $files = $request->file('file');

         foreach($files as $file) {
       
           $rules = array('file' => 'required|mimes:png,jpeg'); // 'required|mimes:png,gif,jpeg,txt,pdf,doc'
           $validator = Validator::make(array('file'=> $file), $rules);

           if($validator->passes()) {

            $img_path= date( 'Y-m-d' ).'.' . str_random( 10 ) . '.'.$file->getClientOriginalExtension();
            $file->move(public_path('upload'),$img_path);  
            $mygallery = new gallery;
            $mygallery->advert_id=$save_advert->id;
            $mygallery->img_path=$img_path;
            $mygallery->save();
           }else {

              return redirect()->route('')->withInput()->withErrors($validator);
           }


     }
 
     }
 
     return back();

    }

    public function myhome(){
      
        $adverts= advert::where('active',true)->orderBy('id','desc')->get();
       // $adverts = advert::all();
        return view('myhome',compact('adverts'));
      
    }

    public function show($id) {
        $show = advert::find($id);
        return view ('show',compact('show'));
    }

}
