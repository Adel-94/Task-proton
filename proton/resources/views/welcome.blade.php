<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script> 
        <title>Task</title>
         
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/style.css" rel="stylesheet" type="text/css">
         

    </head>
    <body> 

       @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
                </ul>
        </div>
        @endif


   <form method="POST" action="{{ route('savepost')  }}"  enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container adverts_infor">        
               <ul class="titlesss"> 
                <li>
                    <h4 class="title"> Elan yerləşdir</h4>
                 </li>
                <li> 
                    <a href="{{url('/myhome')}}"><h4 class="titleHome"> Ana Səhifə</h4> </a>
                </li>
               </ul>
        <ul>
            <li>
                 <label class="select_label">
                 <span class="s_label_title">Elanın növü</span>
                 <select  class="s_label_select" name="name" >
                 <option value="0" disabled="true" selected="true">Secin</option>
                @foreach($advert_type  as $adv)
                    <option value="{{$adv->id }}">{{  $adv->name }}</option>     
                @endforeach
                 </select> 
                 </label>
            </li>
            <li>
               <label class="select_label">
                <span class="s_label_title">Əmlakın növü</span>
                <select  class="s_label_select" name="prop_name" >
                <option value="0" disabled="true" selected="true">Secin</option>
               @foreach($prop_type as $prp)
                <option value="{{ $prp->id}}">{{ $prp->prop_name }}</option>
                @endforeach
                </select>
                </label>
            </li>
            <li>
               <label class="select_label">
                <span class="s_label_title">Şəhər</span>
                <select  class="s_label_select cities" id="city_id" name="city_name" >
                 <option value="0" disabled="true" selected="true">Secin</option>
               @foreach($city as $c)
                <option value="{{ $c->id}}">{{ $c->city_name }}</option>
                @endforeach
                </select>
                </label>
            </li>
            <li>  
              <label class="select_label districts">
              <span class="s_label_title">Rayon</span>
               <select class="s_label_select distr_name" id ="distr_id" name="distr_name">
                <option value="0" disabled="true" selected="true">Secin:</option>
                </select>
               </label>
                        
             </li>
             <li>    
                 <label class="select_label stations">
                 <span class="s_label_title">Məntəqə</span>
                <select class="s_label_select station_name" id="station_id" name="station_name" >
                <option value="0" disabled="true" selected="true">Secin:</option>
                </select>
                </label>
             </li>
             <li>   
                <label class="select_label subways">
                <span class="s_label_title">Metro</span>
                <select class="s_label_select sub_name" name="sub_name" >
                <option value="0" disabled="true" selected="true">Secin:</option>
                </select>
                </label>
             </li>
           
         </ul>
            </div>
           


            <h2 class="titles"> Əmlak haqqinda məlumat </h2>
            <div class="container properties_infor">
            <ul>     
            <li> 
                <label class="select_label">
                 <span class="s_label_title">Qiyməti</span>
                <input type="text" value="gfd" class="s_label_select" name="prop_price" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Qiymeti daxil edin:" >
               </label>
            </li>     
            <li>
                <label class="select_label">
                 <span class="s_label_title">Sahəsi</span>
                 <input type="text" class="s_label_select" name="prop_area" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Otaq sahesini daxil edin:" >
                </label>
            </li>  
            <li>
                <label class="select_label">
                 <span class="s_label_title">Otaq sayı</span>
                <input type="text" class="s_label_select" name="prop_quantity" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Otaq sayini daxil edin:" >
                </label>
            </li>                   
             </ul>  
            </div>




            <h2 class="titles">  Əlaqə məlumatları </h2>
            <div class="container properties_author">
                <ul>
                    <li>
                 <label class="select_label">
                <span class="s_label_title">Elan verən</span>
                <select  class="s_label_select" name="announcer_type" >
                 <option value="0" disabled="true" selected="true">Secin</option>
                @foreach($announcer  as $a)
                    <option value="{{ $a->id }}">{{  $a->announcer_type }}</option>     
                @endforeach
                </select> 
               </label>
                    </li>
                    <li>
                  <label class="select_label">
                  <span class="s_label_title">Ad</span>
                  <input type="text" class="s_label_select" name="auth_name" onkeypress='return ((event.which >=  65  && event.which <= 120) && (event.which != 32 && event.which != 0))' placeholder="daxil edin:" >
                   </label>
                    </li>
                    <li>
                     <label class="select_label">
                     <span class="s_label_title">Əlaqə Nömrəsi</span>
                      <input  id="phone" class="s_label_select" type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="daxil edin:" maxlength="17" >
                     </label>
                    </li>
                    <li>
                     <label class="select_label">
                     <span class="s_label_title">Email</span>
                    <input  placeholder="daxil edin:" class="s_label_select" type="email" name="email"  />       
                    </li>
                </ul>            
            </div>

            <h2 class="titles">  Şəkillər </h2>
            <div class="container advert_images"> 
            <div class="row">
            <input type="file" name="file[]" multiple >
             </div>
             <button  class="submitform" type="submit" name="submit"> Təsdiq et</button>
             </div>
                </form>



    <script type="text/javascript">
    


    $(document).ready(function(){
       $('#adverts').select2({
        placeholder:'select advertisement',
        allowclear:true
       })
        $(document).on('change','.cities',function(){
           
            var city_id=$(this).val();
           // console.log(city_id);
            var div=$(this).parent();

            var op=" ";
            var slct= " ";
   
             $.ajax({
            type:'get',
            url:'{!!URL::to('findDistrict')!!}',
            data:{'id':city_id},

            success:function(data){
            
                if(data.length > 0) {
                  
                  op+='<option value="0" selected disabled>Rayonu secin:</option>';
                   for(var i=0;i<data.length;i++){
                  op+='<option value="'+data[i].id+'">'+data[i].distr_name+'</option>';
                } 
               $('.districts').css('display','block');
                }
                else
                {
                    $('.districts').css('display','none');
                }

              var distr_name =  $('.distr_name');
              distr_name.html(op);               
               
            },
            error:function(){

                
        }

        });

 

    });


        $(document).on('change','.distr_name',function(){
           
            var distr_id=$(this).val();
            console.log(distr_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findStation')!!}',
                data:{'id':distr_id},
                dataType:'json',
                success:function(data){
                    if(data.length > 0){
                    op+='<option value="0" selected disabled>Menteqe secin:</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].station_name+'</option>';
                   }
                     $('.stations').css('display','block'); 
                    }
                    else {
                         $('.stations').css('display','none'); 
                    }

                    
                  var stat_name =  $('.station_name');
                  stat_name.html(op);

                },
                error:function(){

                }
            });
        });


        $(document).on('change','.cities',function(){
           
            var city_id=$(this).val();
        
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findSubway')!!}',
                data:{'id':city_id},
                dataType:'json',
                success:function(data){
                    if(data.length > 0) {
                    op+='<option value="0" selected disabled>Secin:</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].sub_name+'</option>';
                   } 
                     $('.subways').css('display','block');

                    } else {
                        $('.subways').css('display','none');
                    }

                  var subway_name =  $('.sub_name');
                  subway_name.html(op);
                },
                error:function(){

                }
            });
        });

document.getElementById('phone').addEventListener('focus', function (event) {
    this.value = "+994-";
    if(event.which === 8) {
        return false;
    }
   
})
document.getElementById('phone').addEventListener('keyup', function (event) {
        // this.value.length
        if (this.value.length == 7 || this.value.length == 11 || this.value.length == 14) {
            this.value += "-";
        }
    });

});




 


</script>


    </body>
   
 </html>
