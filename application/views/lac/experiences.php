
        

			<article class="col-xs-8">
                  <div>
                      <h3 class="text-left lac-tittle">EXPERIENCES</h3>
                  </div>
                  <br>
                  <div class="lac-content-position lac-article-btm">
                    <p class="text-justify lac-text">
                      The talks, workshops and retreats are designed by our teachers and healers in collaboration with Love Academy. Take a structured journey around our material or try any of our experiences. It´s the most powerful ideas about love, relationships and friendship.
                    </p>
                  </div>
                  
                  
                
        <!--P R O G R A M S SECTION            -->
                  
                  
                  
                  <div class="lac-tittle5-bg">
                     <h5 class="text-left lac-tittle5">PROGRAMS</h5>
                  </div> 
                  
                    <!--PROGRAM 1-->
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">S A S H A &nbsp; C O B R A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                              Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>  
                  
                  
                    <!--PROGRAM 2-->
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">R O L A N D &nbsp; P E R A L T A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                                'Kama Flight Massage' is a dinamyc foreplay program that consist of 5 different techniques developed by Roland Peralta (New York) based on various concious practices. The Kama Flight Massage can best be described as the deep tissue release of Thai massage, the exhilaration of aerial yoga and the serene flow of Watsu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>     
                  
                    <!--PROGRAM 3-->
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">S A S H A &nbsp; C O B R A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                              Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>  
                  
                  
                    <!--PROGRAM 4-->
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">R O L A N D &nbsp; P E R A L T A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                                'Kama Flight Massage' is a dinamyc foreplay program that consist of 5 different techniques developed by Roland Peralta (New York) based on various concious practices. The Kama Flight Massage can best be described as the deep tissue release of Thai massage, the exhilaration of aerial yoga and the serene flow of Watsu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>   
                  
                
        <!--W O R K S H O P S  SECTION            -->
                 
                  <div class="lac-tittle5-bg" style="margin-top: 1000px">
                     <h5 class="text-left lac-tittle5">WORKSHOPS</h5>
                  </div> 


                  <?php foreach ($workshops as $key => $value): ?>

                   <div class="col-xs-6 lac-article">
                     <div class="profile-border">
                       <div class="profile-img-border">
                         <img src="<?=base_url('love_academy_files/users/'.$value['teacher_id'].'/experience/'.clean_text($value['event_name']).'/').$value['event_banner']?>" alt="" class="img-responsive" style="height: 200px;">
                         <div class="profile-name-bg">
                           <h5 class="text-center profile-name"><?=$value['name']?></h5>
                         </div>
                       </div>
                       <br>
                       <div class="row">
                         <div class="col-xs-10 col-xs-offset-1">
                           <div class="profile-content">
                             <p class="text-justify profile-text">
                               <?=$value['event_short_description']?>
                             </p>
                           </div>
                         </div>
                       </div>
                       <p class="text-center" style="position: relative;"> <a href="<?=base_url('workshop/'.$value["id"])?>" ><i class="fa fa-plus profile-icon"></i></a> </p>
                     </div>
                   </div>  

                  <?php endforeach;?>


                  
                    
                  <!-- <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">S A S H A &nbsp; C O B R A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                              Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>  
                  
                  
                    
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">R O L A N D &nbsp; P E R A L T A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                                'Kama Flight Massage' is a dinamyc foreplay program that consist of 5 different techniques developed by Roland Peralta (New York) based on various concious practices. The Kama Flight Massage can best be described as the deep tissue release of Thai massage, the exhilaration of aerial yoga and the serene flow of Watsu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>     
                  
                                   
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">S A S H A &nbsp; C O B R A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                              Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>  
                  
                  
                  
                  <div class="col-xs-6 lac-article">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">R O L A N D &nbsp; P E R A L T A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                                'Kama Flight Massage' is a dinamyc foreplay program that consist of 5 different techniques developed by Roland Peralta (New York) based on various concious practices. The Kama Flight Massage can best be described as the deep tissue release of Thai massage, the exhilaration of aerial yoga and the serene flow of Watsu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>    -->
                  
                                        
                                                                                    
        <!--R E T R E A T S  SECTION            -->
                  
                  <div class="lac-tittle5-bg" style="margin-top: 1000px">
                     <h5 class="text-left lac-tittle5">RETREATS</h5>
                  </div> 
              
                    <!--RETREATS 1-->
                  <div class="col-xs-6 lac-article lac-article-btm">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">S A S H A &nbsp; C O B R A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                              Sasha has been living, training and working with Shantam Nityama for over 8 years and is one of three certified Nitvana Bodywork Practitioners in the world. She now travels globally, sharing the gifts of this work through private sessions and workshops.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>  
                  
                  
                    <!--RETREATS 2-->
                  <div class="col-xs-6 lac-article lac-article-btm">
                    <div class="profile-border">
                      <div class="profile-img-border">
                        <img src="http://placehold.it/310x200" alt="" class="img-responsive">
                        <div class="profile-name-bg">
                          <h5 class="text-center profile-name">R O L A N D &nbsp; P E R A L T A</h5>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-xs-10 col-xs-offset-1">
                          <div class="profile-content">
                            <p class="text-justify profile-text">
                                'Kama Flight Massage' is a dinamyc foreplay program that consist of 5 different techniques developed by Roland Peralta (New York) based on various concious practices. The Kama Flight Massage can best be described as the deep tissue release of Thai massage, the exhilaration of aerial yoga and the serene flow of Watsu.
                            </p>
                          </div>
                        </div>
                      </div>
                      <p class="text-center" style="position: relative;"> <a href="#" ><i class="fa fa-plus profile-icon"></i></a> </p>
                    </div>
                  </div>   
			</article>		
		
                
                
                
        <!--ASIDE     N E W S L E T T E R  SECTION            -->
                  
                  
              
			<aside class="col-xs-4">
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
                          <div class="form-group pull-right" id="select-gender">
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

                   <br>

                   <div class="content lac-border" style="height: 744px;">
                   </div>

                   <br>

                   <div class="content lac-border" style="height: 743px;">
                   </div>

                   <br>

                   <div class="content lac-border" style="height: 743px;">
                   </div>
                   
			 </aside>
<!--		</div>
	</div>-->

        <div class="clearfix">

        </div>
<?php 
function clean_text($string) {
   $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\_]/', '', $string); // Removes special chars.
}
?>