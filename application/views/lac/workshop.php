
  <div class="col-xs-12 lac-banner">
    <div>
      <img src="<?=base_url('love_academy_files/users/'.$data_experience['teacher_id'].'/experience/'.clean_text($data_experience['event_name']).'/').$data_experience['event_banner']?>" alt="" class="img-responsive">
    </div>
  </div> 
		
		
<article class="col-xs-8" style="margin-bottom: 140px;">
  <div class="lac-tittle-card-bg">
    <h1 class="text-left lac-tittle-card-font">WORKSHOP</h1>              
    <p class="text-left lac-subtittle-font">
      IN SITU | <?=$data_experience['event_duration']?> DAYS / <?=$data_experience['event_schedule']?> HRS. PER SESSION
    </p>
  </div>
  <br>

        <!--SECTION-->
                  
                  
                  <div class="col-xs-12 article">
                    <div class="lac-border-video">
                      <div style="margin: 20px;">
                      <?=htmlspecialchars_decode(stripslashes($data_experience['event_video']))?>

                        <!-- <iframe src="https://player.vimeo.com/video/172627017?title=0&byline=0&portrait=0" width="655" height="390" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
                      </div>
                    </div>
                  </div>  
                
                
                    <div class="col-xs-12 lac-article">
                        <div>
                            <p class="text-justify lac-content">
                                In the ‘energy world’, what can be done at a short distance, can be done at a long distance... and what can be directed at one person, can be directed at many.
                            </p>
                            <h4 class="text-left lac-tittle4">THERE IS NO TIME AND SPACE.</h4> 
                            <p class="text-justify lac-content-gray">
                                These events are intended to serve as an alternative to private Nitvana Bodywork Sessions, and allow individuals to experience and receive the benefits of Nitvana Energy Work in a group setting, at a discounted rate. It’s like having a whole group of people, all having their own “session”, all at the same time.
                            </p>
                            <br>
                            <h3 class="text-left lac-tittle3">ABOUT NIRVANA ENERGY WORK:</h3> 
                            <p class="text-justify lac-content-gray">
                                Nitvana Energy Work provides an opportunity for men and women to reconnect with their intrinsic nature by experiencing the natural flow of their sexual energy throughout their bodies, free of any agendas and expectations.<br><br>
                                This Energy Work is designed to raise the capacity for experiencing increased Bliss and to assist in the eliminating of any general or sexual traumas stored in the body, as well as opening energy channels and pathways that have been obstructed since childhood. <br><br>
                                It facilitates women in reconnecting with their positive pole (the heart), while assisting the men in reconnecting with their positive pole (the genitals), thus realigning both to their natural polarity.
                            </p> 
                            <br><br>
                        </div>
                    </div>
                  
                            <div class="col-xs-6">  
                              <div>
                                <img src="http://placehold.it/300x100" style="float:left;" alt="" class="img-responsive">
                              </div>
                            </div>                 

                            <div class="col-xs-6">  
                              <div>
                                <img src="http://placehold.it/300x100"  style="float:right;" alt="" class="img-responsive">
                              </div>
                            </div>
                
                            <div class="col-xs-12 lac-flyer-bg">  
                                  <div>
                                      <h5 class="text-center lac-tittle-flyer-main">WORKSHOP</h5> 
                                      <h1 class="text-center lac-tittle"><?=$data_experience['event_name']?></h1>              
                                      <p class= "text-center lac-subtittle-font">
                                        IN SITU | <?=$data_experience['event_duration']?> DAYS / <?=$data_experience['event_schedule']?> HRS. PER SESSION
                                      </p>
                                      <br>
                                      <h1 class="text-center lac-tittle">DATE</h1>              
                                      <p class="text-center lac-text-flyer-cnt">
                                        <?=$data_experience['event_date']?>
                                      </p>
                                      <br>
                                      <h1 class="text-center lac-tittle">LOCATION</h1>              
                                      <p class="text-center lac-text-flyer-cnt">
                                        <?=$data_experience['event_address']?>
                                      </p>
                                      <br>
                                      <div class="lac-img-flyer"> 
                                        <img style="max-width: 350px;" src="<?=base_url('love_academy_files/users/'.$data_experience['teacher_id'].'/experience/'.clean_text($data_experience['event_name']).'/').$data_experience['event_image']?>" alt="" class="img-responsive lac-border">
                                      </div>
                                      <br>
                                      <div class="col-xs-8 col-xs-offset-5 lac-map-button-mrgn"> 
                                         <a target="_blank" href="<?=$data_experience['event_map']?>"><button type="submit" value="Submit" class="btn btn-secondary lac-map-button" style="font-size: 10px;">GOOGLE MAP</button></a>
                                       </div>    
                                      <!-- <h3 class="text-center lac-date-flyer">SATURDAY, SEPTEMBER 24</h3>             -->
                                      <h3 class="text-center lac-date-flyer"><?=$data_experience['event_date']?></h3>            

                                                <div class="col-xs-8 col-md-offset-2">  
                                                        <table class="table" style="font-weight: bold;">                                           
                                                          <tbody>
                                                            <tr>
                                                              <td><p class="text-right">12:00 - 2:00</p></td>
                                                              <td><p class="text-left">INTRO AND INTERACTIVE TALK</p></td>
                                                            </tr>
                                                            <tr>
                                                              <td><p class="text-right">12:00 - 4:00</p></td>
                                                              <td><p class="text-left">LUNCHBREAK</p></td>
                                                            </tr>
                                                            <tr>
                                                              <td><p class="text-right">4:00 - 7:00</p></td>
                                                              <td><p class="text-left">EXERCISES AND ENERGY WORK</p></td>
                                                            </tr>
                                                          </tbody>
                                                        </table>     
                                                </div>
       
                                      <h3 class="text-center lac-date-flyer">SATURDAY, SEPTEMBER 25</h3>

                                                <div class="col-xs-8 col-md-offset-2">  
                                                        <table class="table" style="font-weight: bold;">                                           
                                                          <tbody>
                                                            <tr>
                                                              <td><p class="text-right">12:00 - 2:00</p></td>
                                                              <td><p class="text-left">INTRO AND INTERACTIVE TALK</p></td>
                                                            </tr>
                                                            <tr>
                                                              <td><p class="text-right">12:00 - 4:00</p></td>
                                                              <td><p class="text-left">LUNCHBREAK</p></td>
                                                            </tr>
                                                            <tr>
                                                              <td><p class="text-right">4:00 - 7:00</p></td>
                                                              <td><p class="text-left">REMOVING TRAUMA AND <br>RE-SENSITIZING THE BODY</p></td>
                                                            </tr>
                                                          </tbody>
                                                        </table>     
                                                </div>
                                                <div class="col-xs-8 col-md-offset-2">  
                                                      <h1 class="text-center lac-tittle">COST $<?=$data_experience['event_cost']?></h1> 
                                                    <div class="col-xs-8 col-md-offset-2"> 
                                                      <button type="submit" value="Submit" class="btn btn-secondary btn-lg" style="font-size: 30px; margin-bottom: 30px; min-width: 255px;  letter-spacing: 4px;">INVESTMENT</button>  
                                                    </div>            
                                                      <p class="text-center lac-text-flyer-cnt">
                                                        INCLUDES: ROOM, MATERIALS, BREAKFAST AND LATE CHECKOUT
                                                      </p>
                                                      <p class="text-center lac-text-flyer-cnt" style="color: #000; font-weight: bold; margin-bottom: 40px;">
                                                        DOES NOT INCLUDE TRANSPORTATION AND HOTEL EXTRAS
                                                      </p>    
                                                </div>  
                                  </div>
                            </div>
			</article>		
		
                
                
                
        <!--ASIDE     N E W S L E T T E R  SECTION            -->
                  
                  
              
			<aside class="col-xs-4">

                   <div class="content lac-border" style="height: 951px;">
                   </div>

                   <br>

                   <div class="content lac-border" style="height: 951px;">
                   </div>

                   <br>

                   <div class="content lac-border" style="height: 950px;">
                   </div>
                   
			 </aside>
			 
                            

      <!-- Section: YOU MIGHT ALSO LIKE -->
      
      
      <div class="row">
        <div class="col-xs-12">
            <h3 class="text-left lac-tittle2">YOU MIGHT ALSO LIKE</h3>
        </div>
      </div>

            <!-- TODO: Need to fix thumnails -->
      <div class="row lac-row-padding  lac-article-btm">

        <div class="col-xs-4" >
              <div class="lac-border lac-img-card">
                <img src="http://placehold.it/325x200" alt="" class="img-responsive">
              </div>
              <div class="col-xs-12">
                  <div>
                    <p class="text-left lac-text-card">
                      Kama Flight Course<br>
                      Roland Peralta<br>
                      Tepoztlán, Morelos, México
                    </p>
                  </div>
              </div>
        </div>

        <div class="col-xs-4" >
              <div class="lac-border lac-img-card">
                <img src="http://placehold.it/325x200" alt="" class="img-responsive">
              </div>
              <div class="col-xs-12">
                  <div>
                    <p class="text-left lac-text-card">
                      Nitvana Superconsciousness Workshop<br>
                      Shantam Nityama<br>
                      Ciudad de México, México
                    </p>
                  </div>
              </div>
        </div>

        <div class="col-xs-4" >
              <div class="lac-border lac-img-card">
                <img src="http://placehold.it/325x200" alt="" class="img-responsive">
              </div>
              <div class="col-xs-12">
                  <div>
                    <p class="text-left lac-text-card">
                      Together: A touch experience for couples<br>
                      Sandra Peirs<br>
                      Ciudad de México, Morelos, México
                    </p>
                  </div>
              </div>
        </div>
      </div>		 
			 

        <div class="clearfix">

        </div>


<?php 
function clean_text($string) {
   $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
}
?>