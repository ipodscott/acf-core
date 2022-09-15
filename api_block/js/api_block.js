(function($){	
$( ".location-select" ).change(function() {
  var selectedLocation = this.options[this.selectedIndex].value;
  if (selectedLocation == "all") {
    $('.location-card-container .location-card').removeClass('hidden');
  } else {
    $('.location-card-container .location-card').addClass('hidden');
    $('.location-card-container .location-card[data-eventtype="' + selectedLocation + '"]').removeClass('hidden');
  }	
});

})(jQuery)