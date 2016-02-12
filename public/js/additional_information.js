$(document).ready(function() {
	"use strict";

	//*--------uses google maps api to display the map of the property on additional_information.blade.php--------*
	var latitude = parseFloat($('#latitude').val());
	var longitude = parseFloat($('#longitude').val());
	var prospectAddress = $('#prospect-address').val();
	var prospectAddress = prospectAddress.split(", ");

    // Set our map options
    var myOptions = {
        zoom: 18,
        center: {
        	lat: latitude,
        	lng: longitude
        },
    };
	// Render the map
    var map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);

	var markerLabel = '<div>'+		      
				      '<h5>' + prospectAddress[0] + '</h5>' +
				      '<h5>' + prospectAddress[1] + ', ' + prospectAddress[2] + '</h5>' +
				      '</div>';
					
    //used for the info window
	var infowindow = new google.maps.InfoWindow({
		content: markerLabel
	});
	
    //Place the marker on the map
	var marker = new google.maps.Marker({
		position: {lat: latitude, lng: longitude},
		map: map,
	});

	//place the marker on the window upon loading of the page
    infowindow.open(map, marker);


});

// TODO:  figure out the zip code to the address
// TODO:  Google Maps API has street view option

