(function() {

	//*--------uses google places api to autocomplete addresses on index.blade.php---------*
	function initialize() {
	var input = document.getElementById('prospect-address');
	var autocomplete = new google.maps.places.Autocomplete(input);
	}
	google.maps.event.addDomListener(window, 'load', initialize); //DOM Listener, not Event Listener

	//*--------uses google maps api to display the map of the property on additional_information.blade.php--------*
	//used to center the map
	var latitude = 29.4284595;
	var longitude = -98.492433;

	// Set our map options
	var mapOptions = {
		// Set the zoom level
		zoom: 10,

		// This sets the center of the map
		center: {
		    lat:  latitude,
		    lng: longitude
		}
	};

	// Render the map
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	

})();