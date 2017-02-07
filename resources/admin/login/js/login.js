$(function() {
  
  $( "#login_button" ).click(function() {

    var email = $("#login_email").val();
    var password = $("#login_password").val();

    //alert("usuario: " + user + " password: " + password );

      $.ajax({
        url: $site_base + 'AdminController/login',
        type: 'POST',
        data: {email: email, password: password},
      })
      .done(function( data ) {
        console.log(data);
        // Si en nuestro objeto la propiedad de response es un 'ok'
        if( data.response == 'ok') {
          // Cambiamos al dashboard del admin
          window.location.replace($site_base+'dashboard');
        } else {
          // Si no, mostramos un mensaje de error
          $('#error').show();
        }

      })
      .fail(function() {
        
      })
      .always(function() {
        
      });

  });

});