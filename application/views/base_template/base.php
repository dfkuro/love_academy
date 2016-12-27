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
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">TEACHERS & HEALERS & COACHES</h3>
              </div>
            </div>
          </div>

          <br>

          <!-- TODO: Need to fix thumnails -->
          <div class="row">

            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 10px 0px 20px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 150px;">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=250×150&w=250&h=150" alt="" class="img-responsive">
                    <div class="" style="background-color: #CDCCCB; height: 22px;">
                      <h5 class="text-center" style="color: #fff; padding: 4px 0pc 0px 4px; font-family: 'Casper';">S A S H A &nbsp; C O B R A</h5>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="" style="height: 180px; max-height: 190px; position: relative; top: 10px;">
                        <p class="center-text" style="font-size: 0.7em;">
                          Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                        </p>
                      </div>
                    </div>
                  </div>

                </div>

                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 10px 0px 20px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 150px;">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=250×150&w=250&h=150" alt="" class="img-responsive">
                    <div class="" style="background-color: #CDCCCB; height: 22px;">
                      <h5 class="text-center" style="color: #fff; padding: 4px 0pc 0px 4px; font-family: 'Casper';">R O L A N D &nbsp; P E R A L T A</h5>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="" style="height: 180px; max-height: 190px; position: relative; top: 10px;">
                        <p class="center-text" style="font-size: 0.7em;">
                          Guiding couples and women to move out of the "quickie consciousness" enabling people, deeper more intimate and authentic connections in relationship.
                        </p>

                        <p class="center-text" style="font-size: 0.7em;">
                            Its the manifestation of years of practicing yoga, contact improvisation, partner yoga, thai massage, sensual massage, 5 Rhythms and other healing modalities including Reiki and Hands of Light Healing.
                        </p>

                      </div>
                    </div>
                  </div>

                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>


            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 10px 0px 20px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 150px;">
                    <img src="https://placeholdit.imgix.net/~text?txtsize=33&txt=250×150&w=250&h=150" alt="" class="img-responsive">
                    <div class="" style="background-color: #CDCCCB; height: 22px;">
                      <h5 class="text-center" style="color: #fff; padding: 4px 0pc 0px 4px; font-family: 'Casper';">S H A N T A M &nbsp; N I T Y A M A</h5>
                    </div>
                  </div>

                  <br>

                  <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                      <div class="" style="height: 180px; max-height: 190px; position: relative; top: 10px;">
                        <p class="center-text" style="font-size: 0.7em;">
                          Shantam Nityama is out to shake the world up with his presence. He has pioneered his own revolutionary form of bodywork designed to take men and women on a journey from sex to superconsciousness, while healing at the deepest levels.
                        </p>
                      </div>
                    </div>
                  </div>

                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>


          </div>

          <br>

          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">EXPERIENCES</h3>
              </div>
            </div>
          </div>

          <br>

          <div class="row">

            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 10px 0px 20px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 380px;">
                    <img src="" alt="">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 15px 0px 15px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 380px;">
                    <img src="" alt="">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-4" >
                <div class="content" style="margin: 0px 20px 0px 10px; border: 1px solid #aaa; height: 400px;">
                  <div class="" style="margin: 10px; border: 1px solid #  aaa; height: 380px;">
                    <img src="" alt="">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">SIGNATURE EVENTS</h3>
              </div>
            </div>
          </div>

          <br>

          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>


          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>


          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>

            <div class="col-xs-6" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 320px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 160px;">
                    <img src="http://placehold.it/415x160" alt="" class="img-responsive">
                  </div>
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 125px;">
                    <img src="http://placehold.it/415x125" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>



          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">KNOWLEDGE</h3>
              </div>
            </div>
          </div>

          <br>

          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-12" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 350px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 320px;">
                    <img src="http://placehold.it/1230x450" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>

          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-12" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 350px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 320px;">
                    <img src="http://placehold.it/1230x450" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>

          <div class="row" style="padding: 0px 20px 0px 20px;">
            <div class="col-xs-12" >
                <div class="content" style="margin: 0px 0px 0px 0px; border: 1px solid #aaa; height: 350px;">
                  <div class="" style="margin: 10px; border: 1px solid #aaa; height: 320px;">
                    <img src="http://placehold.it/1230x450" alt="" class="img-responsive">
                  </div>
                </div>
                <p class="text-center" style="position: relative; bottom: 10px;"> <a href="#" ><i class="fa fa-plus" style="color: #EC2587; font-weight: 900;"></i></a> </p>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">CALENDAR</h3>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-xs-12">
              <div class="" style="background-color: #C7C6C2; height: 45px;">
                <h3 class="text-center" style="color: #EC2587; padding-top: 10px; letter-spacing: 6px; font-family: 'Casper'; font-weight: 100;">PLAYLIST LOVE ACADEMY</h3>
              </div>
            </div>
          </div>

          <br>

          <iframe src="https://embed.spotify.com/?uri=spotify:user:spotify:playlist:3rgsDhGHZxZ9sB9DQWQfuf" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe>


        </div>



      </div>


      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <div class="row" style="padding: 15px; background-color: #D0D1D2; height: 130px;">

            <div class="col-xs-2">
              <h5 style=" color: #EC2587; font-family; 'Casper';">ABOUT US</h5>
              <p style="color; #919396; padding-left:10px; font-size: .7em;">
                <a href="#">About Us</a>
              </p>
              <p style="color; #919396; padding-left:10px; font-size: .7em;">
                <a href="#">Jobs</a>
              </p>
              <p style="color; #919396; padding-left:10px; font-size: .7em;">
                <a href="#">Terms & Condition</a>
              </p>
            </div>
            <div class="col-xs-2">
              <h5 style=" color: #EC2587; font-family; 'Casper';">SUBMISSION</h5>
              <p style="color; #919396; padding-left:10px; font-size: .7em;">
                <a href="#">Teachers</a>
              </p>
              <p style="color; #919396; padding-left:10px; font-size: .7em;">
                <a href="#">Events</a>
              </p>
            </div>
            <div class="col-xs-2">
              <h5 style=" color: #EC2587; font-family; 'Casper';">ABOUT US</h5>
            </div>
            <div class="col-xs-2 col-xs-offset-3">
              <h5 style=" color: #EC2587; font-family; 'Casper';">ABOUT US</h5>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- <div class="container" style="background-color: #fff;"> -->

  </body>

  <!-- <script src="<?=base_url('resources')?>" type="text/javascript"></script> -->
</html>
