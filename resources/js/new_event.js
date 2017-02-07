$(function() {

  console.log('File: new_event.js');
  
  $('#type_of_event').change(function(event) {
    
    $(".form-hide").hide('fast', function() {
      $(".form-" + $('#type_of_event').val() ).show();
    });
  });

});