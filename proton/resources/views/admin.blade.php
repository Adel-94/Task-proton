<!DOCTYPE html>
<html>
<head>
	<title>admin panel</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link href="/css/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

  <div class="container mytable">
  <h2>Elanlarım</h2>
          
  <table class="table">
    <thead>
      <tr class="bg">
      	<th>Activate:</th>
        <th>ID</th>
        <th>Prop_Price</th>
        <th>Prop_Area</th>
        <th>Prop_Quantity</th>
        <th>Advert_Type</th>
        <th>Prop_Type</th>
        <th>Auth_Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Announcer_Type</th>
         <th>City Name</th>
        <th>Distr_Name</th>
        <th>Station_Name</th>
        <th>Subway_Name</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($advert as $adv)
   
       <tr>
        
      @if($adv->active == true)
      <td ><a  href="{{url('/updateNoStatus',$adv->id)}}" class="label label-success userStatusdeactive " id="{{$adv->id}}">DeActivate</a></td>
      @else
     <td ><a href="{{url('/updateYesStatus',$adv->id)}}" class="label label-danger userStatusactive" id="{{$adv->id}}">Acitvate</a></td>
       @endif</td>
        <td>{{ $adv->id  }}</td>
        <td>{{ $adv->prop_price}}</td>
        <td>{{ $adv->prop_area}}</td>
        <td>{{ $adv->prop_quantity}}</td>
        <td>{{ $adv->advert_type->name}}</td>
        <td>{{ $adv->prop_type->prop_name }}</td>
        <td>{{ $adv->author->auth_name}}</td>
        <td>{{ $adv->author->email}}</td>
        <td>{{ $adv->author->phone}}</td>
        <td>{{ $adv->announcers->announcer_type}}</td>
        <td>{{(!is_null($adv->cities)) ? $adv->cities->city_name : 'yoxdur'}}</td>
        <td>{{(!is_null($adv->districts)) ? $adv->districts->distr_name : 'yoxdur'}}</td>
        <td>{{(!is_null($adv->stations)) ? $adv->stations->station_name : 'yoxdur'}}</td>
        <td>{{(!is_null($adv->subways)) ? $adv->subways->sub_name : 'yoxdur'}}</td>
     
     
       @endforeach 
       <td>{{$adv->active }}</td>
        </tr> 
    </tbody> 
  </table>
</div>



</body>
</html>