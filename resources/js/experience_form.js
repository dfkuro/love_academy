var d = new Date();
var weekday = new Array(7);
weekday[0] =  "Sunday";
weekday[1] = "Monday";
weekday[2] = "Tuesday";
weekday[3] = "Wednesday";
weekday[4] = "Thursday";
weekday[5] = "Friday";
weekday[6] = "Saturday";


var d = new Date();
var month = new Array();
month[0] = "January";
month[1] = "February";
month[2] = "March";
month[3] = "April";
month[4] = "May";
month[5] = "June";
month[6] = "July";
month[7] = "August";
month[8] = "September";
month[9] = "October";
month[10] = "November";
month[11] = "December";


$(function() {


  /*======================================================
  =            Code for the schedule creation            =
  ======================================================*/

  $('#date_event').change(function(){

    if( $('#duration_event').val() != '' ){
      getDatesBetween();
    } else {
      alert('Please, choose the duration of the event.');
    }

  });

  $('#duration_event').change(function(){
    // Create a new date object
    if( $('#date_event').val() != '' ){
      getDatesBetween();
    } else {
      alert('Please, choose the date for the event.');
    }

  });

  /*=====  End of Code for the schedule creation  ======*/


  var _URL = window.URL || window.webkitURL;

  $('#upload_image_event').click(function(){
      $('#input_image_event').click();
  });

  $('#upload_image_banner').click(function(){
      $('#input_image_banner').click();
  });

  $('#upload_image_promotion').click(function(){
      $('#input_image_promotion').click();
  });

  /*===================================
  =            Date events            =
  ===================================*/

  $('#date_event').datetimepicker({
    format: 'DD/MM/YYYY'
  });

  $('#hour_event').datetimepicker({
    format:'HH:mm'
  });

  $('#schedule_event').datetimepicker({
    format:'HH:mm'
  });

  /*=====  End of Date events  ======*/




  /*=====================================================
  =            Image validation widht/height            =
  =====================================================*/

  $("#input_image_event").change(function (e) {7
      var file, img;
      if ((file = this.files[0])) {
          img = new Image();
          img.onload = function () {
              //alert(this.width + " " + this.height);
              if( this.width == 512 && this.height == 512 ) {
                readURL(document.getElementById('input_image_event'), $('#image_profile'));
              } else {
                $("#input_image_event").val("");
                alert("The profile image should be 512px x 512px");
              }
          };
          img.src = _URL.createObjectURL(file);
      }
  });


  $("#input_image_banner").change(function (e) {7
      var file, img;
      if ((file = this.files[0])) {
          img = new Image();
          img.onload = function () {
              //alert(this.width + " " + this.height);
              if( this.width == 800 && this.height == 350 ) {
                readURL(document.getElementById('input_image_banner'), $('#image_banner'));
              } else {
                $("#input_image_banner").val("");
                alert("The banner image should be 800px x 350px");
              }
          };
          img.src = _URL.createObjectURL(file);
      }
  });


  $("#input_image_promotion").change(function (e) {7
      var file, img;
      if ((file = this.files[0])) {
          img = new Image();
          img.onload = function () {
              //alert(this.width + " " + this.height);
              if( this.width == 512 && this.height == 512 ) {
                readURL(document.getElementById('input_image_promotion'), $('#image_promotion'));
              } else {
                $("#input_image_promotion").val("");
                alert("The promotion image should be 512px x 512px");
              }
          };
          img.src = _URL.createObjectURL(file);
      }
  });

  /*=====  End of Image validation widht/height  ======*/


  /*====================================================
  =            Codigo para las validaciones            =
  ====================================================*/

  $('#form_new_experienc').validate({
    /*errorPlacement: function(error, element) {
      error.appendTo('#errordiv');
    },*/
    errorClass: "my-error-class",
    validClass: "my-valid-class",
    rules: {
      event_name: {
        required: true
      },
      event_date: {
        required: true
      },
      event_duration: {
        required: true,
        number: true
      },
      event_cost: {
        required: true
      },
      event_short_description: {
        required: true,
      },
      event_description: {
        required: true
      },
      event_type_description: {
        required: true
      },
      event_property: {
        required: true
      },
      event_address: {
        required: true
      },
      event_map: {
        required: true
      },
      event_capacity: {
        required: true,
        number: true
      },
      event_tag: {
        required:true
      }

    },
    messages: {
      /*birth_month: {
        required: 'Required Month'
      },
      birth_day: {
        required: 'Required Day'
      },
      birth_year: {
        required: 'Required Year'
      }*/
    }
  });

  /*=====  End of Codigo para las validaciones  ======*/


  /*==========================================================
  =            Codigo para el uso de las ciudades            =
  ==========================================================*/


  /*$.ajax({
    cache: false,
    type: "POST",
    url: $site_base + "CountriesController/get_countries",
    //dataType: "json",
  })
  .done(function( data ){
    $('#form_new_user #countryId').html(data); // EL select se vuelve a cargar con la nueve informacion.
    // $('#form_new_user select[name="country"]').val( familia );
  });


  $("#countryId").on("change", function(ev) {

    $.ajax({
      cache: false,
      type: "POST",
      url: $site_base + "CountriesController/get_states/" + $(this).val(),
      //dataType: "json",
    })
    .done(function( data ){
      $('#form_new_user #stateId').html(data); // EL select se vuelve a cargar con la nueve informacion.
      // $('#form_new_user select[name="country"]').val( familia );
    });

  });

  $("#stateId").on("change", function(ev) {
    $.ajax({
      cache: false,
      type: "POST",
      url: $site_base + "CountriesController/get_cities/" + $(this).val(),
      //dataType: "json",
    })
    .done(function( data ){
      $('#form_new_user #cityId').html(data); // EL select se vuelve a cargar con la nueve informacion.
      // $('#form_new_user select[name="country"]').val( familia );
    });
  });*/



  /*=====  End of Codigo para el uso de las ciudades  ======*/



  $('#form_new_experience').on('submit', function(event){
    event.preventDefault();
    // Debemos de comprobar que la validacion sea correcta
    //if( $(this).valid()){
      var formData = new FormData($(this)[0]);
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "LacFormController/experience_new",
        data: formData,
        contentType: false,
        processData: false
      })
      .done(function( data ){
        console.log(data)
      })
      .fail(function( data, textstatus, errorThrown ){
        console.log("error al enviar los datos. Data: " + data + " - status: " + textstatus + " - errorThrown: " + errorThrown);
        console.log(data.responseText);
      });
    //}

  });


});

/**
 * [readURL Funcion que permite la lectura de la imagen del temporal]
 * @param  {[type]} input         [Es el input en donde esta almancenada la informacion del input]
 * @param  {[type]} input_to_show [El lugar en donde vamos a mostrar la imagen]
 * @return {[type]}               [description]
 */
function readURL(input, input_to_show) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $('#image_profile').attr('src', e.target.result);
            input_to_show.attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}



//From: http://stackoverflow.com/questions/3066586/get-string-in-yyyymmdd-format-from-js-date-object
Date.prototype.toInputFormat = function() {
   var yyyy = this.getFullYear().toString();
   var mm = (this.getMonth()+1).toString(); // getMonth() is zero-based
   var dd  = this.getDate().toString();
   return yyyy + "-" + (mm[1]?mm:"0"+mm[0]) + "-" + (dd[1]?dd:"0"+dd[0]); // padding
};


/** [getDatesBetween Obtenemos las fechas que intermedias de la fecha inicial, mas los dias posteriores] */
function getDatesBetween() {
  var date_input = $('#date_event').val();
  var newdate_format = date_input.split("/").reverse().join('-');
  var date_event = new Date(newdate_format);
  var dates_id = [];

  days = parseInt($("#duration_event").val(), 10);

  if(!isNaN(date_event.getTime())){
      date_event.setDate(date_event.getDate() + days);
      final_date = date_event.toInputFormat();
  } else {
      alert("Invalid Date");
  }

  var start = newdate_format,
      end = new Date(final_date),
      currentDate = new Date(start),
      between = [];

  var count = 0;
  while (currentDate <= end) {
    currentDate.setDate(currentDate.getDate() + 1);
    between.push(weekday[currentDate.getDay()] + ", " + month[currentDate.getMonth()] + " " +  currentDate.getDate());
    dates_id.push(currentDate.getFullYear() + '-' + (currentDate.getMonth() + 1) + '-' + currentDate.getDate());
    count++;
  }
  $("#schedule").html('');
  var html = '<label for="pwd">ACTIVITIES</label>';
  between.forEach(function(item, index) {

    html +=    '<div class="form-group" id="'+dates_id[index]+'">';
    html +=    '  <div class="btn btn-success btn-xs" onclick="newActivity(\''+dates_id[index]+'\')"><b>+</b></div> <label for="pwd"> '+item+'</label> ';
    html +=    '  <input type="text" value="'+dates_id[index]+'" name="program['+dates_id[index]+']" hidden>';
    /*html +=    '<div class="row">';
    html +=    '  <div class="col-xs-2">';
    html +=    '    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    ';
    html +=    '  </div>';
    html +=    '  <div class="col-xs-2">';
    html +=    '    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    ';
    html +=    '  </div>';
    html +=    '  <div class="col-xs-6">';
    html +=    '    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    ';
    html +=    '  </div>';
    html +=    '  <div class="col-xs-1">';
    html +=    '    <button class="btn btn-danger btn-xs"> <b>-</b> </button>';
    html +=    '  </div>';
    html +=    '</div>';*/
    html +=    '</div><br>';

  });
  $('#schedule').append(html);


  /*for( i=0; i < count; i++ ){
    var html = '';
    html +=    '<div class="form-group">';
    html +=    '  <label for="pwd"></label>';
    html +=    '  <input type="text" class="form-control" id="short_description_event" name="event_short_description">';
    html +=    '</div>';

    $('#schedule').append(html);

  }*/

  //$('#results').html(between.join('<br> '));

}

/**
 * [newActivity Permite la creacion de un nuevo elemento que sera colocado para que el profesor inserte una nueva actividad]
 * @param  {[type]} id_element [Id del elemento en el cual ser realizara el append del nuevo objeto]
 * @return {[type]}            [null]
 */
function newActivity( id_element ){
  // variable para crear nuestro codigo en html.
  var html = '';
  // Obtenemos la cantidad de elmentos ya disponibles antes de agregar un nuevo elemento
  var number_activity = $('#'+id_element).children().length;
  // A esa cantidad se le resla los 2 elementos que se encuentran predefinidos
  number_activity = number_activity - 2;
  console.log('Numero de actividad: ' + number_activity);

  html +=    '<div class="row"><br>';
  html +=    '  <div class="col-xs-2">';
  html +=    '    <input type="text" class="form-control hour_activity" id="short_description_event" name="program['+id_element+'][activity_'+number_activity+'][hour_ini]">    ';
  html +=    '  </div>';
  html +=    '  <div class="col-xs-2">';
  html +=    '    <input type="text" class="form-control hour_activity" id="short_description_event" name="program['+id_element+'][activity_'+number_activity+'][hour_end]">    ';
  html +=    '  </div>';
  html +=    '  <div class="col-xs-6">';
  html +=    '    <input type="text" class="form-control" id="short_description_event" name="program['+id_element+'][activity_'+number_activity+'][name_activity]">    ';
  html +=    '  </div>';
  html +=    '  <div class="col-xs-1">';
  html +=    '    <div class="btn btn-danger btn-xs" onclick="deleteActivity(this)"> <b>-</b> </div>';
  html +=    '  </div>';
  html +=    '</div>';

  $('#'+id_element).append(html);

  $('.hour_activity').datetimepicker({
    format:'HH:mm',
    stepping: 30,
    defaultDate: "2017-01-12 12:00"
  });
}

function deleteActivity( activity ){
  activity.parentElement.parentElement.remove();
}
