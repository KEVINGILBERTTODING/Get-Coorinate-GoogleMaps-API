
<html>
  <head>
    <title>Add Marker</title>
<script src="jquery.min.js"></script>
<script
src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&key=">

</script>

<script>
var map;
var myCenter=new google.maps.LatLng(-6.968711, 110.430228);
var marker;
var awal=0;

var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

function initialize()
{

  map = new google.maps.Map(document.getElementById("petaku"),mapProp);
  
    google.maps.event.addListener(map,'click',function(event){

	  if(awal==0){
	  placeMarker(event.latLng);
	  }else{
	  changeMarker(event.latLng);
	  }
	  awal=1;
	
      setLatLng(event.latLng);
    });
  
}

function setLatLng(lokasi){
	
	

    $("#x").val(lokasi.lat());
    $("#y").val(lokasi.lng());
	
}

function placeMarker(location) {  
  marker = new google.maps.Marker({
    position: location,
    map: map,
  });
}

function changeMarker(location) {  
  marker.setPosition(location);
}


</script>
</head>
<body onload="initialize()">
	<h1>Set Lokasi</h1>
	<hr>
	<div style="width:500px;">
	<table width=100%>
		<tr>
			<td>Latitude</td>
			<td>Longitude</td>
		</tr>
		<tr>
			<td><input type="text" id="x" size=30></td>
			<td><input type="text" id="y" size=30></td>
		</tr>
		
	</table>
	</div>
	<div id="petaku" style="width:500px;height:300px"></div>
	</body>
</html>		


