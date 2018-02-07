<?php 


	


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		load Country map
 	</title>
 </head>
 <body>
<h1> Country Map loader</h1>

<input type="text" id = "txtautocomplete" style ="width:200px" placeholder = "Enter Address" name="">
<br>
<div id="results"></div>


<script>
	google.maps.addDomListener(window, 'load', initialize);
	function initialize(){
		var automcomplete = new google.maps.places.Automcomplete(document.getElementById('txtautocomplete'));

		google.maps.event.addListener(autocomplete, 'place_changed', function(){

			var place = autocomplete.getPlace();
			var location = "<b> Latitude</b>: " + place.geometry.location.A + "<br/>";
			location += "<b> Longitude</b>: " + place.geometry.location.F + "<br/>";
			document.getElementById("results").innerHTML = location;
		});
		}

</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed in=true&libraries=places"></script>

 
 </body>
 </html>