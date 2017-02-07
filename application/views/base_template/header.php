<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <link rel="icon" href="<?=base_url( 'assets/favicon.ico' )?>"> -->

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url( 'vendor/twbs/bootstrap/dist/css/bootstrap.min.css?ver=' ).rand()?>" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('resources/font_awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/bootstrap-table.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('vendor/wenzhixin/bootstrap-table/dist/extensions/group-by-v2/bootstrap-table-group-by.css')?>">

    
    <?php
        if(isset($css)) {
            foreach ($css as $key => $ruta_css) {
                print('<link rel="stylesheet" href="'. site_url($ruta_css) .'"></link>');
            }
        }
    ?>

    <link rel="stylesheet" href="<?=base_url('resources/css/master.css')?>">
    <link rel="stylesheet" href="<?=base_url('resources/css/master2.css')?>">

    <title>Love Academy</title>


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

              <!-- <a href="<?=base_url()?>" style="text-decoration: none;"><h2 style="color: #EC2587; font-weight: 600;" ><i class="fa fa-heart pull-left"></i> LOVE ACADEMY</h2></a> -->
              <a href="<?=base_url()?>"><img style="margin-top: 27px;" src="<?=base_url('resources/images/logo.png')?>"></a>
            </div>

            <div class="login pull-right" style="margin: 30px;">
              <?php if ( $this->session->logged_in ): ?>

                <div class="dropdown">
                  <button class="dropbtn"><i class="fa fa-heart "></i> <?=$this->session->name?></button>
                  <div class="dropdown-content">
                  <?php if ( $this->session->type == 'teacher' ): ?>                  
                    <a href="<?=base_url('experience_form')?>" style="color: #EC2587;"><i class="fa fa-heart fa-fw"></i> <span>New Experience</span></a>
                    <a href="<?=base_url('session_form')?>" style="color: #EC2587;"><i class="fa fa-heart fa-fw"></i> <span>New Session</span></a>
                    <!-- <a href="<?=base_url('new_event')?>" style="color: #EC2587;"><i class="fa fa-heart fa-fw"></i> <span>New event</span></a> -->
                  <?php elseif ( $this->session->type == 'user' ): ?>    
                    <a href="<?=base_url('profile')?>" style="color: #EC2587;"><i class="fa fa-user fa-fw"></i> <span>My profile</span></a>
                  <?php endif; ?>
                  <a href="<?=base_url('user_logout')?>" style="color: #EC2587;"><i class="fa fa-close fa-fw"></i> <span>Logout</span></a>
                  </div>
                </div>
              
              <?php else: ?>
                <span style="color: #EC2587; text-decoration: none;"><a href="<?=base_url('profile_registration')?>" style="color: #EC2587; text-decoration: none;">SIGN UP</a> / <a href="<?=base_url('login')?>" style="color: #EC2587; text-decoration: none;">LOG IN</a></span>
              <?php endif; ?>

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

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-12">
          <div class="lac-carousel">
            <!-- <img src="http://lorempixel.com/1400/500/fashion" alt="" class="img img-responsive"> -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 500px;">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <!-- <img src="http://lorempixel.com/1400/500/fashion" alt="Chania"> -->
                  <img src="<?=base_url('resources/images/slides/slider1_1.png')?>" alt="Chania">
                </div>

                <div class="item">
                  <img src="<?=base_url('resources/images/slides/slider1_2.png')?>" alt="Chania">
                </div>

                <div class="item">
                  <img src="<?=base_url('resources/images/slides/slider1_3.png')?>" alt="Flower">
                </div>

                <div class="item">
                  <img src="<?=base_url('resources/images/slides/slider1_4.png')?>" alt="Flower">
                </div>

                <div class="item">
                  <img src="<?=base_url('resources/images/slides/slider1_5.png')?>" alt="Flower">
                </div>

                <div class="item">
                  <img src="<?=base_url('resources/images/slides/slider1_6.png')?>" alt="Flower">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            
            <div class="lac-menu text-center">

              <ul id="nav">
                <li style="padding-right: 20px;"><img src="<?=base_url('resources/images/icons/icon_home.png')?>"></li>
                <li> - </li>
                <li><a href="#" id="aboutus_a">ABOUT US</a></li>
                <li> - </li>
                <li><a href="#" id="teachers_a">TEACHERS & HEALERS & COACHES</a></li>
                <li> - </li>
                <li><a href="#" id="experiences_a">EXPERIENCES</a></li>
                <li> - </li>
                <li><a href="#" id="knowledge_a">KNOWLEDGE</a></li>
                <li> - </li>
                <li><a href="#" id="calendar_a">CALENDAR</a></li>
              </ul>


            </div>
          </div>
        </div>
      </div>
      <br>
      