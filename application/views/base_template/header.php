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
    <link rel="stylesheet" href="<?=base_url('resources/font_awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/bootstrap-table.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/bootstrap-table-group-bycss')?>">
    <link rel="stylesheet" href="<?=base_url('resources/css/master.css')?>">

    <title>Love Academy</title>

    <style media="screen">


    </style>

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

    <div class="container" style="background-color: rgba(145,147,150, 0.1);">

      <!-- Cabecera principal de todo el sistema -->
      <div class="row">

        <div class="col-xs-12">
          <div class="cabecera" style="height: 100px;">

            <div class="logo pull-left">

              <h2 style="color: #EC2587; font-weight: 600;" ><i class="fa fa-heart pull-left"></i> LOVE ACADEMY</h2>
            </div>

            <div class="social pull-right" style="margin: 30px;">
              <a href="#">
                <img src="<?=base_url('resources/images/icons/social_facebook.png')?>" style="height: 25px; padding-left: 10px;">
              </a>
              <a href="#">
                <img src="<?=base_url('resources/images/icons/social_vimeo.png')?>" style="height: 25px; padding-left: 10px;">
              </a>
              <a href="#">
                <img src="<?=base_url('resources/images/icons/social_youtube.png')?>" style="height: 25px; padding-left: 10px;">
              </a>
            </div>

            <div class="login pull-right" style="margin: 30px;">
              SIGN UP / LOG ING
            </div>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-12">
          <div class="lac-carousel">
            <img src="http://placehold.it/1200x400" alt="" class="img img-responsive">

            
            <div class="lac-menu text-center">

              <ul id="nav">
                <li style="padding-right: 20px;"><img src="<?=base_url('resources/images/icons/icon_home.png')?>"></li>
                <li> - </li>
                <li><a href="#">ABOUT US</a></li>
                <li> - </li>
                <li><a href="#">TEACHERS & HEALERS & COACHES</a></li>
                <li> - </li>
                <li><a href="#">EXPERIENCES</a></li>
                <li> - </li>
                <li><a href="#">KNOWLEDGE</a></li>
                <li> - </li>
                <li><a href="#">CALENDAR</a></li>
              </ul>


            </div>
          </div>
        </div>
      </div>
      <br>
      