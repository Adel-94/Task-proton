<!DOCTYPE html>
<html>
<head>
	<link href="/css/style.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
	<title></title>
</head>
<body>
	<div class="container">

		<div class="row show">

			<div class="col-md-6 leftimg">
				<h2 class="information">{{$show->advert_type->name}}  {{ $show->prop_quantity}} otaqli  {{$show->prop_type->prop_name}}  {{ $show->cities->city_name}}  {{ $show->districts->distr_name}}</h2>
				 <img src="{{asset('upload/'.$show->gallery->last()['img_path'])}}" style="width: 100%; height: 150px;"> 
				 <h3 class="prop_type_name">{{$show->prop_type->prop_name }}</h3>
				 <ul class="properties">
				 	<li>{{ $show->prop_quantity}} otaq</li>
				 	<li>{{$show->prop_area}} m2</li>
				 </ul>
				
				  <h4>Unvan:</h4>
				  <ul class="address">
				  	<li>{{ $show->cities->city_name}}</li>
				  	<li>{{ $show->districts->distr_name}}</li>
				  </ul>
			</div>
			<div class="col-md-6 mygallery">
							<ul>
				@foreach($show->gallery as $images)
			
			   <li>	 <img src="/upload/{{ $images->img_path }}"> </li>

		        @endforeach 
			</ul>

			</div>
		

			
		</div>
	</div>
</body>
</html>