$(function() {

  $('html, body').animate({
      scrollTop: $("#login_title").offset().top
  }, 1000);


  $( "#login" ).submit(function(e) {
    e.preventDefault();

    var email = $("#login_email").val();
    var password = $("#login_password").val();
    //alert("usuario: " + user + " password: " + password );

      $.ajax({
        url: $site_base + 'lacController/user_validation',
        type: 'POST',
        data: {email: email, password: password},
      })
      .done(function( data ) {
        console.log(data);
        // Si en nuestro objeto la propiedad de response es un 'ok'
        if( data.response == 'ok') {
          // Cambiamos al dashboard del admin
          window.location.replace($site_base+'home');
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