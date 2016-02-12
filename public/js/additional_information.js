(function() {
	"use strict";

	//*--------uses google maps api to display the map of the property on additional_information.blade.php--------*
	function initialize() {
		var lat = $('#latitude').val();
		var lng = $('#longitude').val();

	    var latlng = new google.maps.LatLng(lat, lng);
	    // Set our map options
	    var myOptions = {
	        zoom: 15,
	        center: latlng,
	        mapTypeId: google.maps.MapTypeId.ROADMAP	
	    };
	    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);
	}
	// Render the map
	google.maps.event.addDomListener(window, "load", initialize);

})();

// TODO:  add the marker on the address
// TODO:  figure out the zip code to the address
