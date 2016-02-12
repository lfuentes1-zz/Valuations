(function() {

	"use scrict";
	
	function convertAddressToLatLong (prospectAddress){
		// Initialize geocoder object
		var geocoder = new google.maps.Geocoder();

		// Geocode our address
		geocoder.geocode({ "address": prospectAddress }, function(result, status) {
			var localLat = result[0].geometry.location.lat();
			var localLong = result[0].geometry.location.lng();
			var myLatlng = new google.maps.LatLng(localLat,localLong);

		  	// Check for a successful result of geocoding
		   	if (status == google.maps.GeocoderStatus.OK) {
			    $("#latitude").val(localLat);
			    $("#longitude").val(localLong);
		    }
		});
	};


	function initialize() {
		//*--------uses google places api to autocomplete addresses on index.blade.php---------*
		var input = document.getElementById('prospect-address');
		var autocomplete = new google.maps.places.Autocomplete(input);

		//the following is to figure out the lat and long of the prospect
		$("#prospect-address").blur(function(event){
			if($(this).val()) {
				var prospectAddress = $(this).val();
				//convert the address to lat/lon coordiantes
				convertAddressToLatLong (prospectAddress);
			}
		});
	}
	
	google.maps.event.addDomListener(window, 'load', initialize); //DOM Listener, not Event Listener




})();