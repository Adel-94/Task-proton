<!DOCTYPE html>
<html>
<head>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

	<title></title>
</head>
<body>

 <div class="container advertisements">
 <a href="{{url('/')}}"><h4 class="title marginleft"> Elan yerləşdir</h4></a>	
 	<div class="row">
 		@foreach($adverts as $adv)
 	<div class="col-md-3 myadverts">
 		<div class="advert_infor">
 			<ul> 	   		
	   <li><a  href="{{url('/show',$adv->id)}}"> <img src="{{asset('upload/'.$adv->gallery->last()['img_path'])}}"></a>	  </li>
 			    <li>Qiymeti:{{ $adv->prop_price }} AZN </li>
 				<li>{{ $adv->prop_type->prop_name   }}</li>
 				<li>Satilir {{ $adv->prop_quantity }} otaqli</li>
 				<li>Sahe:{{$adv->prop_area}} kv. m</li>
 			    <li>{{(!is_null($adv->cities)) ? $adv->cities->city_name : ''}},
 				    {{(!is_null($adv->districts)) ? $adv->districts->distr_name : ''}}
 		       </li>				
 			</ul>
 		</div>
 	</div>
 	  @endforeach
 
 </div>
 </div>
</body>
</html>