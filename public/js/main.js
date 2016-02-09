(function() {

  //uses google places api to autocomplete addresses
  function initialize() {
    var input = document.getElementById('prospect-address');
    var autocomplete = new google.maps.places.Autocomplete(input);
  }
  google.maps.event.addDomListener(window, 'load', initialize);


})();