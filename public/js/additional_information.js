(function() {

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