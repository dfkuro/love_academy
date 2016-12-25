<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url( 'assets/favicon.ico' )?>">

    <title>Love Academy</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url( 'vendor/twbs/bootstrap/dist/css/bootstrap.min.css?ver=' ).rand()?>" rel="stylesheet">
    <?php
        if(isset($css)) {
            foreach ($css as $key => $ruta_css) {
                print('<link href="'. site_url($ruta_css) .'"></link>');
            }
        }
    ?>
    <!-- <link href="<?=base_url( 'assets/css/master.css?ver=' ).rand()?>" rel="stylesheet"> -->


    <script>

         if( window.location.origin+'/'+location.pathname.split('/')[0] == 'http://localhost/') {
            $site_base = window.location.origin+'/'+location.pathname.split('/')[1]+'/';
            console.log(window.location.origin+'/'+location.pathname.split('/')[1]+'/');
        } else {
            $site_base = window.location.origin+'/'+location.pathname.split('/')[0];
            console.log(window.location.origin+'/'+location.pathname.split('/')[0]);
        }

    </script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->
    <!--<link href="jumbotron-narrow.css" rel="stylesheet">-->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Page header  -->


    <!-- We are going to create the header title and the optional menu. -->

    <div class="container">

      <!-- Cabecera principal de todo el sistema -->
      <div class="row">
          <div class="col-xs-12">
            <div class="cabecera" style="height: 100px;">

              <div class="logo pull-left">
                <img src="" alt="">
                <h2 style="color: #ff1188; font-weight: 600;" >LOVE ACADEMY</h2>
              </div>

              <div class="social pull-right">

              </div>

              <div class="login pull-right">

              </div>

            </div>
          </div>
      </div>


      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">

          <div class="row">
            <div class="col-xs-12">
              <div class="contenido-sistema" style="height: 400px; background-color: red;">

              </div>
            </div>
          </div>

        </div>
      </div>



    </div>

    <div class="container" style="background-color: #fff;">
      <button type="button" class="btn btn-primary" name="button"> Hi there! </button>
  </body>
</html>
