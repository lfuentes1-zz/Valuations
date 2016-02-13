(function() {

	"use scrict";
	
	function convertAddressToLatLong (prospectAddress){
		// Initialize geocoder object
		var geocoder = new google.maps.Geocoder();

		// Geocode our address
		geocoder.geocode({ "address": prospectAddress }, function(result, status) {
			var latitude = result[0].geometry.location.lat();
			var longitude = result[0].geometry.location.lng();
										var myLatlng = new google.maps.LatLng(latitude,longitude);


		  	// Check for a successful result of geocoding
		   	if (status == google.maps.GeocoderStatus.OK) {
			    $("#latitude").val(latitude);
			    $("#longitude").val(longitude);
	            if (result[0]) {
	                for (j = 0; j < result[0].address_components.length; j++) {
	                    if (result[0].address_components[j].types[0] == 'postal_code')
	                    	$("#zipcode").val(result[0].address_components[j].short_name);
	                }
	            }
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
	
	google.maps.event.addDomListener(window, 'load', initialize); //DOM Listener, not Event Listener, same as function ready in jquery
})();