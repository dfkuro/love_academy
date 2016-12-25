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

    <title>Love Academy</title>

    <style media="screen">

      /*TODO: Add font at last*/
      @font-face {
        font-family: myFirstFont;
        src: url(sansation_light.woff);
      }

      .item-menu-icon{
        margin: 12px;
        padding: 12px;
        color: #EC2587;
      }

      .item-menu-link{
        color: #000000;
        padding-top: 26px;
        font-size: 1.2em;
      }
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

    <div class="container">

      <!-- Cabecera principal de todo el sistema -->
      <div class="row">
          <div class="col-xs-12">
            <div class="cabecera" style="height: 100px;">

              <div class="logo pull-left">

                <h2 style="color: #EC2587; font-weight: 600;" ><i class="fa fa-heart pull-left"></i> LOVE ACADEMY</h2>
              </div>

              <div class="social pull-right" style="margin: 30px;">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-vine"></i>
                <i class="fa fa-youtube"></i>
              </div>

              <div class="login pull-right" style="margin: 30px;">
                SIGN UP / LOG ING
              </div>

            </div>
          </div>
      </div>


      <div class="row">

        <!-- Header and menu section -->
        <div class="col-xs-10 col-xs-offset-1">

          <div class="row">
            <div class="col-xs-12">
              <div class="contenido-sistema" style="height: 400px; background-color: red;">
                <img src="http://placehold.it/945x400" alt="" class="img img-responsive">

                <!-- TODO: Need fix on space, fix separator '-', center items on the menu -->
                <div class="" style="height: 70px; background-color: #CDCCCB; " id="menu">

                  <div class="item-menu-icon pull-left">
                    <i class="fa fa-camera fa-2x"></i>
                  </div>

                  <div class="item-menu-link pull-left">
                    <p> ABOUT US - </p>
                  </div>

                  <div class="item-menu-link pull-left">
                    <p> TEACHERS & HEALERS & COACHES - </p>
                  </div>

                  <div class="item-menu-link pull-left">
                    <p> EXPERIENCIES - </p>
                  </div>

                  <div class="item-menu-link pull-left">
                    <p> KNOWLEDGE - </p>
                  </div>

                  <div class="item-menu-link pull-left">
                    <p> CALENDAR</p>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <!-- What is love academy and newsletter -->
          <div class="row">

            <div class="col-xs-8">
              <img src="http://placehold.it/650x400" alt="" class="img-responsive">
            </div>

            <div class="col-xs-4">

              <div class="" style="background: #000000; color: #ffffff; padding: 2px 10px 0px 10px;">
                <h3>N E W S L E T T E R</h3>
                <p>GREAT DISCOUNTS, FREE LECTURES AND  CONFERENCES, DOWNLOADS AND MORE... </p>
              </div>

              <!-- TODO: Fix space between inputs -->
              <form>
                <div class="form-group">
                  <label for="form_name">NAME</label>
                  <input type="text" class="form-control" id="form_name" placeholder="">
                  <div class="form-group pull-right" style="padding-top: 7px;">
                    <select class="form-control" id="sel1" style="font-size: 0.8em; height: 26px;">
                      <option>MASCULINE</option>
                      <option>MASCULINE 2</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="form_birthday">BIRTHDAY</label>
                  <input type="date" class="form-control" id="form_birthday" placeholder="">
                </div>

                <div class="form-group">
                  <label for="form_country">COUNTRY / CITY</label>
                  <input type="text" class="form-control" id="form_country" placeholder="">
                </div>

                <div class="form-group">
                  <label for="form_email">E-MAIL</label>
                  <input type="email" class="form-control" id="form_email" placeholder="">
                </div>


                <!-- TODO: Add style to the button then make it a css rule -->
                <button type="submit" class="btn btn-default pull-right" >SUSCRIBE</button>
              </form>

            </div>

          </div>

          <!-- Section: TEACHERS & HEALERS & COACHES -->
          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">TEACHERS & HEALERS & COACHES</h2>
              </div>
            </div>
          </div>

          <br>

          <!-- TODO: Need to fix thumnails -->
          <div class="row">
            <div class="col-xs-4">
              <div class="thumbnail" style="padding: 10px; height: 250px;">
                <img src="https://1.bp.blogspot.com/-aFQ-W_KTFWQ/V6BdtpSUy6I/AAAAAAAAAH4/xD_U-BYItSsNvk1UGfROqLBzzU1h32oXQCLcB/s320/4-diwali-greeting-cards-by-ajay-acharya.jpg" alt="Bootstrap Thumbnail: Beautiful Bootstrap Thumbnail like Material Design Cards">
                <div class="caption">
                  <div class="" style="background-color: #C7C6C2; height: 25px;">
                    <h4 class="text-center" style="color: #ffffff; padding: 4px;">SASHA COBRA</h4>
                    <div class="teacher-info" style="padding: 5px; height: 160px;">
                      <p style="font-size: 0.65em;">
                        Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="thumbnail" style="padding: 10px; height: 250px;">
                <img src="https://1.bp.blogspot.com/-aFQ-W_KTFWQ/V6BdtpSUy6I/AAAAAAAAAH4/xD_U-BYItSsNvk1UGfROqLBzzU1h32oXQCLcB/s320/4-diwali-greeting-cards-by-ajay-acharya.jpg" alt="Bootstrap Thumbnail: Beautiful Bootstrap Thumbnail like Material Design Cards">
                <div class="caption">
                  <div class="" style="background-color: #C7C6C2; height: 25px;">
                    <h4 class="text-center" style="color: #ffffff; padding: 4px;">SASHA COBRA</h4>
                    <div class="teacher-info" style="padding: 5px; height: 160px;">
                      <p style="font-size: 0.65em;">
                        Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="thumbnail" style="padding: 10px; height: 250px;">
                <img src="https://1.bp.blogspot.com/-aFQ-W_KTFWQ/V6BdtpSUy6I/AAAAAAAAAH4/xD_U-BYItSsNvk1UGfROqLBzzU1h32oXQCLcB/s320/4-diwali-greeting-cards-by-ajay-acharya.jpg" alt="Bootstrap Thumbnail: Beautiful Bootstrap Thumbnail like Material Design Cards">
                <div class="caption">
                  <div class="" style="background-color: #C7C6C2; height: 25px;">
                    <h4 class="text-center" style="color: #ffffff; padding: 4px;">SASHA COBRA</h4>
                    <div class="teacher-info" style="padding: 5px; height: 160px;">
                      <p style="font-size: 0.65em;">
                        Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">EXPERIENCES</h2>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">SIGNATURE EVENTS</h2>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">KNOWLEDGE</h2>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">CALENDAR</h2>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 40px;">
                <h2 class="text-center" style="color: #EC2587; padding-top: 4px;">PLAYLIST LOVE ACADEMY</h2>
              </div>
            </div>
          </div>


        </div>



      </div>



    </div>

    <!-- <div class="container" style="background-color: #fff;"> -->

  </body>

  <!-- <script src="<?=base_url('resources')?>" type="text/javascript"></script> -->
</html>
