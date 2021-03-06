
      

      <!-- What is love academy and newsletter -->
      <div class="row lac-row-padding">
        
        <div class="col-xs-8" id="aboutus_section">
          <div class="lac-bordered">
            <!-- <img src="http://placehold.it/780x545" alt="" class="img-responsive"> -->
            <img src="<?=base_url('resources/images/somos.png')?>" alt="" class="img-responsive">
          </div>
        </div>

        <div class="col-xs-4">

          <div class="lac-bordered">
            <div id="lac-newsletter-title" style="">
            <h3>N E W S L E T T E R</h3>
            <p>GREAT DISCOUNTS, FREE LECTURES AND  CONFERENCES, DOWNLOADS AND MORE... </p>
          </div>
          <br>
          <!-- TODO: Fix space between inputs -->
          <form>
            <div class="form-group">
              <label for="form_name">NAME</label>
              <input type="text" class="form-control" id="form_name" placeholder="">
              <div class="form-group pull-right lac-select">
                <select class="form-control" >
                  <option>MASCULINE</option>
                  <option>MASCULINE 2</option>
                </select>
              </div>
            </div>
            <br>
            <div class="form-group">
              <label for="form_birthday">BIRTHDAY</label>
              <input type="date" class="form-control" id="form_birthday" placeholder="">
            </div>
            <br>  
            <div class="form-group">
              <label for="form_country">COUNTRY / CITY</label>
              <input type="text" class="form-control" id="form_country" placeholder="">
            </div>
            <br>  
            <div class="form-group">
              <label for="form_email">E-MAIL</label>
              <input type="email" class="form-control" id="form_email" placeholder="">
            </div>
            <br>

            <!-- TODO: Add style to the button then make it a css rule -->
            <button type="submit" class="btn btn-default pull-right" >SUSCRIBE</button>
            <br>
          </form>
          </div>

        </div>

      </div>

      <!-- Section: TEACHERS & HEALERS & COACHES -->
      <div class="row" id="teachers_section">
        <div class="col-xs-12">
          <div class="lac-title-row" style="">
            <h3 class="text-center">TEACHERS & HEALERS & COACHES</h3>
          </div>
        </div>
      </div>

      <br>

      <!-- TODO: Need to fix thumnails -->
      <div class="row lac-row-padding">

        <?php foreach ($teachers_healers as $key => $value): ?>

          <div class="col-xs-4" >
            <a href="teacher_profile/<?=$value['id']?>" >
              <div class="lac-card-thc">
                <div>
                  <div style="position: relative;  width: 350px; height: 200px; overflow: hidden;">
                    <img src="<?=base_url('love_academy_files/users/avatars/').$value['avatar']?>" style=" position: absolute; left: 50%; top: 50%; height: 100%; width: auto; -webkit-transform: translate(-50%,-50%); -ms-transform: translate(-50%,-50%); transform: translate(-50%,-50%);" alt=""  class="img-responsive">
                  </div>
                  <div class="lac-card-thc-title" >
                    <h5 class="text-center lac-card-thc-title"><?=$value['name']?> &nbsp; <?=$value['last_name']?></h5>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-xs-10 col-xs-offset-1">
                    <div class="lac-card-thc-info">
                      <p class="center-text">
                        <?=$value['bio']?>
                      </p>
                    </div>
                  </div>
                </div>
                <p class="text-center"> <a href="th_profile/<?=$value['id']?>" ><i class="fa fa-plus"></i></a> </p>
              </div>
            </a>

          </div>

        <?php endforeach;?>

        <!-- <div class="col-xs-4" >
        
            <div class="lac-card-thc">
              <div>
                <img src="http://placehold.it/325x200" alt="" class="img-responsive">
                <div class="lac-card-thc-title">
                  <h5 class="text-center lac-card-thc-title">S A S H A &nbsp; C O B R A</h5>
                </div>
              </div>
        
              <br>
        
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                  <div class="lac-card-thc-info" >
                    <p class="center-text" >
                      Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                    </p>
                  </div>
                </div>
              </div>
              <p class="text-center"> <a href="#" ><i class="fa fa-plus"></i></a> </p>
            </div>
        
        </div>
        
        <div class="col-xs-4" >
        
            <div class="lac-card-thc">
              <div class="lac-card-thc-title">
                <img src="http://placehold.it/325x200" alt="" class="img-responsive">
                <div class="lac-card-thc-title">
                  <h5 class="text-center">S A S H A &nbsp; C O B R A</h5>
                </div>
              </div>
        
              <br>
        
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                  <div class="lac-card-thc-info">
                    <p class="center-text">
                      Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                    </p>
                  </div>
                </div>
              </div>
              <p class="text-center"> <a href="#" ><i class="fa fa-plus"></i></a> </p>
            </div>
        
        </div> -->


      </div>

      <br>

      <div class="row" id="experiences_section">
        <div class="col-xs-12">
          <div class="lac-title-row" style="">
            <h3 class="text-center" style="">EXPERIENCES</h3>
          </div>
        </div>
      </div>

      <br>


      <div class="lac-row-padding">

        <div class="col-xs-4" >
            <div class="lac-card-experience">
              <div>
                <a style="position:absolute;" href="experiences">
                  <img src="<?=base_url('resources/images/workshops.png')?>" alt="" class="img img-responsive" style="width: 92%;">
                </a>
              </div>
            </div>
            <p class="text-center"> <a href="experiences" ><i class="fa fa-plus"></i></a> </p>
        </div>
        
        <div class="col-xs-4" >
            <div class="lac-card-experience">
              <div>
                <a style="position:absolute;" href="experiences">
                  <img src="<?=base_url('resources/images/programs.png')?>" alt="" class="img img-responsive" style="width: 92%;">
                </a>
              </div>
            </div>
            <p class="text-center"> <a href="experiences" ><i class="fa fa-plus"></i></a> </p>
        </div>

        <div class="col-xs-4" >
            <div class="lac-card-experience">
              <div>
                <a style="position:absolute;" href="experiences">
                  <img src="<?=base_url('resources/images/retreats.png')?>" alt="" class="img img-responsive" style="width: 92%;">
                </a>
              </div>
            </div>
            <p class="text-center"> <a href="experiences" ><i class="fa fa-plus"></i></a> </p>
        </div>
       

      </div>


      <div class="row">
        <div class="col-xs-12">
          <div class="lac-title-row">
            <h3 class="text-center" >SIGNATURE EVENTS</h3>
          </div>
        </div>
      </div>

      <br>

      <div class="row lac-row-padding">
        
        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/together.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>


        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/kamaflight.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>

      </div>

      <div class="row lac-row-padding">
        
        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/sundance.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>


        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/moondance.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>

      </div>


      <div class="row lac-row-padding">
        
        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/placermio.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>


        <div class="col-xs-6" >
          <div class="lac-card-event-img">
            <div>
              <img src="<?=base_url('resources/images/signature_events/eyegazing.png')?>" alt="" class="img-responsive">
            </div>
            <div class="">
              <img src="http://placehold.it/515x160" alt="" class="img-responsive">
            </div>
          </div>
          <p class="text-center"> <a href="#" ><i class="fa fa-plus" style=></i></a> </p>
        </div>

      </div>




      <div class="row" id="knowledge_section">
        <div class="col-xs-12">
          <div class="lac-title-row">
            <h3 class="text-center">KNOWLEDGE</h3>
          </div>
        </div>
      </div>

      <br>

        <div class="row lac-row-padding">
          <div class="col-xs-12" >
            <div class="lac-card-knowledge">
              <a href="<?=base_url('knowledge')?>">
                <div>
                  <img src="<?=base_url('resources/images/knowledge/blog.png')?>" alt="" class="img-responsive">
                </div>
              </a>
            </div>
            <p class="text-center"> <a href="<?=base_url('resources/images/knowledge/blog.png')?>" ><i class="fa fa-plus"></i></a> </p>
          </div>
        </div>

        <div class="row lac-row-padding">
          <div class="col-xs-12" >
            <div class="lac-card-knowledge">
              <a href="<?=base_url('question_of_love')?>">
                <div>
                  <img src="<?=base_url('resources/images/knowledge/questionlove.png')?>" alt="" class="img-responsive">
                </div>
              </a>
            </div>
            <p class="text-center"> <a href="<?=base_url('question_of_love')?>" ><i class="fa fa-plus"></i></a> </p>
          </div>
        </div>

        <div class="row lac-row-padding">
          <div class="col-xs-12" >
            <div class="lac-card-knowledge">
              <a href="<?=base_url('')?>">
                <div>
                  <img src="<?=base_url('resources/images/knowledge/bookclub.png')?>" alt="" class="img-responsive">
                </div>
              </a>
            </div>
            <p class="text-center"> <a href="#\<?=base_url('')?>" ><i class="fa fa-plus"></i></a> </p>
          </div>
        </div>


        <div class="row" id="calendar_section">
          <div class="col-xs-12">
            <div class="lac-title-row">
              <h3 class="text-center">CALENDAR</h3>
            </div>
          </div>
        </div>

        <br>

        <div class="row lac-row-padding">
          <div class="col-xs-12">
            <table id="calendar" class="lac-table"></table>
          </div>
        </div>

    

        

        <div class="row">
          <div class="col-xs-12">
            <div class="lac-title-row">
              <h3 class="text-center">PLAYLIST LOVE ACADEMY</h3>
            </div>
          </div>
        </div>

        <br>

        <iframe src="https://embed.spotify.com/?uri=spotify:user:spotify:playlist:3rgsDhGHZxZ9sB9DQWQfuf" width="100%" height="380" frameborder="0" allowtransparency="true"></iframe>

        <div class="clearfix">

        </div>
