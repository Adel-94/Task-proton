<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\advert;
use App\Models\gallery;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{  

    public function index(){
      
    	$advert = advert::orderBy('active','asc')->get();
    	return view('admin',compact('advert'));
    }

    public function updateYesStatus($id)
  {
     $logoStatus = advert::findOrFail($id);
     $logoStatus->update(['active' => true]);
      //return response()->json($data_active);
     return redirect::to('/admin');

  }
    public function updateNoStatus($id)
  {
     $logoStatus = advert::findOrFail($id);
     $logoStatus->update(['active'=> false]);
     //return response()->json($data_deactive);

     return redirect::to('/admin');
 }
}
