var _URL = window.URL || window.webkitURL;
var blob_image_avatar = new Blob();
var imageData;


$(function() {
  
  /*=================================================
  =            Multiple selection option            =
  =================================================*/
  
  $('.radio-option').click(function () {
    $(this).not(this).removeClass('click');
    $(this).toggleClass("click");
  });
  
  /*=====  End of Multiple selection option  ======*/

  /*===================================
  =            Uso de date            =
  ===================================*/
  
  $('#birth_date').datetimepicker({
    format: 'DD/MM/YYYY'
  });
  
  $('#birth_hour').datetimepicker({
    format:'HH:mm'
  });
  
  /*=====  End of Uso de date  ======*/
  
  

  $('#upload_image').click(function(){
      // $('#input_image').click();
  });

  $('#modal_crop_image').on('hidden.bs.modal', function() {
    
  });

  $("#avatarInputAvatar").change(function(){
      readURL(this);
  });


  // Realizaremos las acciones requeridas cuando el boton del modal sea presionado
  $('#cropImageButton').on('click', function(event) {
    event.preventDefault();
    // Copiamos la informacion de la imagen recortada
    imageData = $('#crop_image').cropper('getCroppedCanvas').toDataURL();
    // Colocamos la imagen recortada en el formulario para que el usuario pueda verla
    $('#image_profile').attr('src', imageData);

    // Antes de eliminar cualquier dato
    $('#crop_image').cropper('getCroppedCanvas').toBlob(function(blob) {
      blob_image_avatar = blob;
    });
    // Limpìamos el uso de la libreria de cropper que se este ejecutando
    //$('#crop_image').cropper('destroy');
    // Limpiamos cualquier imagen que aparezca
    $('#crop_image').attr('src', '');
    // Limpiamos nuestro input de tipo file de calquier informacion que tenga
    document.getElementById("avatarInputAvatar").value = "";
  });

  /*=====================================================
  =            Image validation widht/height            =
  =====================================================*/
  
  $("#input_image").change(function (e) {
      var file, img;
      if ((file = this.files[0])) {
          img = new Image();
          img.onload = function () {
              //alert(this.width + " " + this.height);
              if( this.width == 512 && this.height == 512 ) {
                readURL(document.getElementById('input_image'));
              } else {
                alert("The profile image should be 512px x 512px");
              }
          };
          img.src = _URL.createObjectURL(file);
      }
  });
  
  /*=====  End of Image validation widht/height  ======*/

  /*====================================================
  =            Codigo para las validaciones            =
  ====================================================*/
  
  $('#form_new_teacher').validate({
    /*errorPlacement: function(error, element) {
      error.appendTo('#errordiv');
    },*/
    errorClass: "my-error-class",
    validClass: "my-valid-class",
    rules: {
      display_name: {
        required: true
      },
      name: {
        required: true
      },
      email: {
        required: true,
        email: true
      },
      password:{
        required: true
      },
      confirm_password: {
        required: true,
        equalTo: "#password"
      },
      country: {
        valueNotEquals: 0
      },
      state: { 
        valueNotEquals: 0
      },
      cities_id: { 
        valueNotEquals: 0
      },
      language: {
        required: true
      },
      phone: {
        required: true
      },
      birth_date: {
        required: true
      }
    }
  });
  
  /*=====  End of Codigo para las validaciones  ======*/


  /*==========================================================
  =            Codigo para el uso de las ciudades            =
  ==========================================================*/
  
  
  $.ajax({
    cache: false,
    type: "POST",
    url: $site_base + "CountriesController/get_countries",
    //dataType: "json",
  })
  .done(function( data ){
    $('#form_new_teacher #countryId').html(data); // EL select se vuelve a cargar con la nueve informacion.
    // $('#form_new_teacher select[name="country"]').val( familia );
  });


  $("#countryId").on("change", function(ev) {

    $.ajax({
      cache: false,
      type: "POST",
      url: $site_base + "CountriesController/get_states/" + $(this).val(),
      //dataType: "json",
    })
    .done(function( data ){
      $('#form_new_teacher #stateId').html(data); // EL select se vuelve a cargar con la nueve informacion.
      // $('#form_new_teacher select[name="country"]').val( familia );
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
      $('#form_new_teacher #cityId').html(data); // EL select se vuelve a cargar con la nueve informacion.
      // $('#form_new_teacher select[name="country"]').val( familia );
    });
  });


  
  /*=====  End of Codigo para el uso de las ciudades  ======*/
  


  $('#form_new_teacher').on('submit', function(event){
    event.preventDefault();
    
    var formData = new FormData($(this)[0]);
    var cropcanvas = $('#crop_image').cropper('getCroppedCanvas');
    var cropping = cropcanvas.toDataURL("image/png");

    formData.append('filename', 'change_name.jpg');
    formData.append('avatar', imageData);


    // Debemos de comprobar que la validacion sea correcta
    if( $('#form_new_teacher').valid() ){
      // Enviamos los datos al controlador
      $.ajax({
        cache: false,
        method: "POST",
        url: $site_base + "LacController/register_teacher",
        data: formData,
        contentType: false,
        processData: false
        // data: $(this).serializeArray()
      })
      .done(function( data ){
        console.log(data)
      })
      .fail(function( data, textstatus, errorThrown ){
        console.log("error al enviar los datos. Data: " + data + " - status: " + textstatus + " - errorThrown: " + errorThrown);
        console.log(data.responseText);
      });
    }

  });


});


function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // Una vez que se cargo la informacion, cargamos nuestra imagen en nuestro tag img
            $('#crop_image').attr('src', e.target.result);
            // Mandamos a ejecutar nuestra funcion para mostrar nuestro crop en la imagen que el usuario a subido
            cropImage();
        }
        // leemos la imagen y la colocamos en nuestro input.
        reader.readAsDataURL(input.files[0]);
    }
}

/** [cropImage Daremos inicio para poder hacerle crop a la imagen que el usuario sube] */
function cropImage(){
  $('#crop_image').cropper({
    aspectRatio: 1 / 1,
    zoomable: false,
    zoomOnTouch: false,
    zoomOnWheel: false,
    minCropBoxWidth: 400,
    minCropBoxHeight: 400,
    crop: function(e) {
    }

  });
}
