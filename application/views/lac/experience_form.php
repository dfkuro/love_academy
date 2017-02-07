<div class="row">
  <div class="col-xs-12">

    <div class="row lac-row-padding">

      <div class="col-xs-8">
        <div class="row">
          
          <div class="col-xs-12">
            <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">EXPERIENCE FORM</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-xs-12">
            <form role="form" id="form_new_experience" enctype="multipart/form-data">
              
              <br>

              <div class="form-group">
                <div class="col-xs-12" style="padding-left: 0; padding-right: 0;">
                  <img id="image_banner"  class="img-responsive" style="width: 800px; height: 350px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image_banner">UPLOAD IMAGE (BANNER)</p>
                  <div hidden>
                    <input type="file" name="event_banner" id="input_image_banner" >
                  </div>
                </div> 
              </div>

              <div class="clearfix"></div>
              <br>

              <div class="form-group">
                <label for="form_birthday">EVENT NAME</label>
                <input type="text" class="form-control" id="name_event" placeholder="" name="event_name">
              </div>

             <!--  <div id="results"></div>
             
             <br> -->
              
              <br>

              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">DATE (DD/MM/YY)</label>
                  <input type="text" class="form-control pull-left" id="date_event" name="event_date" style="color: inherit;" >
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">SCHEDULE (24 HOURS CLOCK)</label>
                  <input type="text" class="form-control pull-right" id="hour_event" name="event_hour" style="color: inherit;">
                  <!-- <p class="help-block">Last Name</p> -->
                </div>
              </div>
              <div class="clearfix"></div>
              <br>
              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">DURATION</label>
                  <input type="number" class="form-control pull-left" id="duration_event" name="event_duration">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">COST (USD)</label>
                  <input type="number" class="form-control pull-right" id="cost_event" name="event_cost">
                </div>
              </div>

              <div class="clearfix"></div>
              <br>

              

              <div class="form-group">
                <label for="form_birthday">VIDEO (EMBED CODE) </label>
                <textarea type="text" class="form-control" id="video_event" placeholder="" name="event_video" rows="5" style="background: rgba(0,0,0,0);"></textarea>
              </div>
              <br><br>


              <div class="form-group">
                <div class="input-group">

                  <div class="input-group-btn " style="width: 16%;">
                    <select class="form-control" name="event_video_source">
                      <option value="youtube">YOUTUBE</option>
                      <option value="vimeo">VIMEO</option>
                    </select>
                  </div>

                  <input class="form-control col-xs-10" name="event_video_link" type="text4" placeholder="Put the video link.">
                  
                  
                </div>
              </div>   

              <br>
              
              
              <div class="clearfix"></div>
              <br>
              <hr style="border: 1px solid #000;">
              <br>

              <div class="form-group">
                <label for="pwd">SHORT DESCRIPTION - EVENT</label>
                <input type="text" class="form-control" id="short_description_event" name="event_short_description">
              </div>

              <!-- <div class="form-group">
                <label for="pwd">TEST</label>
                <div class="row">
                  <div class="col-xs-2">
                    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    
                  </div>
                  <div class="col-xs-2">
                    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    
                  </div>
                  <div class="col-xs-6">
                    <input type="text" class="form-control" id="short_description_event" name="event_short_description">    
                  </div>
                  <div class="col-xs-1">
                    <button class="btn btn-danger"> <b>-</b> </button>
                  </div>
                </div>
                
              </div> -->

              <br>

              <div class="form-group">
                <label for="pwd">DESCRIPTION - EVENT</label>
                <textarea type="text" class="form-control" id="description_event" rows="3" style="background: rgba(255,255,255,0);" name="event_description"></textarea>
              </div>


              <br>

              <div class="form-group lac-select">
                <label for="gender">TYPE OF EXPERIENCE</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control " id="type_event" name="event_type_experience">
                    <option value="1">WORKSHOP</option>
                    <option value="2">TALK</option>
                    <option value="3">RETREAT</option>
                  </select>
                </div>
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group lac-select">
                <label for="gender">TYPE OF EVENT</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control " id="type_event  " name="event_type">
                    <option value="ONLINE">ONLINE</option>
                  </select>
                </div>
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group lac-select">
                <label for="gender">PROPERTY</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control " id="property_event" name="event_property">
                    <option value="suggested">SUGGESTED EVENT</option>
                  </select>
                </div>
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group">
                <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                  <img id="image_profile" src="<?=base_url('love_academy_files/default/default_upload_image.png')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image_event">UPLOAD IMAGE</p>
                  <div hidden>
                    <input type="file" name="event_image" id="input_image_event" >
                  </div>
                </div> 
              </div>
             
             <div class="clearfix"></div>
             

              <div class="form-group">
                <label for="pwd">ADDRESS</label>
                <input type="text" class="form-control" id="address_event" name="event_address">
              </div>

              <br>

              <div class="form-group">
                <label for="pwd">LINK GOOGLE MAPS</label>
                <input type="text" class="form-control" id="map_event" name="event_map">
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">CAPACITY AVAILABLE</label>
                  <input type="text" class="form-control pull-left" id="capacity_name" name="event_capacity">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">CATEGORY</label>
                  <input type="text" class="form-control pull-right" id="category_event" name="event_category">
                  <!-- <p class="help-block">Last Name</p> -->
                </div>
              </div>
              
              <div class="clearfix"></div>
              
              <h5 style="background: #ddd; padding: 10px; letter-spacing: 4px;">PROGRAMS</h5>
              
              <br>

              <div id="schedule"></div>
              <br>

              <!-- <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">SCHEDULE (24 HOURS CLOCK)</label>
                  <input type="text" class="form-control pull-left" id="schedule_event" name="event_schedule">
                </div>
              </div> -->

              <div class="clearfix"></div>
              <br>
              <h5 style="background: #ddd; padding: 10px; letter-spacing: 4px;">PROMO CODE</h5>
              


              <div class="form-group">
                <label for="pwd">DESCRIPTION</label>
                <textarea class="form-control" id="promo_description_event" type="text" name="event_promo_description" style="height: 142px; background-color: transparent; "></textarea>
              </div>

              <br>

              <div class="form-group">
                <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                  <img id="image_promotion" src="<?=base_url('love_academy_files/default/default_upload_image.png')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image_promotion">UPLOAD IMAGE (PROMOTION)</p>
                  <div hidden>
                    <input type="file" name="event_image_promotion" id="input_image_promotion" >
                  </div>
                </div>
                <div class="col-xs-8" style="">
                  <label for="gender">TYPE OF PROMO</label>
                  <br>
                  <div class="col-xs-4" style="padding-left: 0;">
                    <select class="form-control " id="type_event_promo" name="event_type_promo">
                      <option value="masculine">2 X 1</option>
                    </select>
                  </div>
                </div>
              </div>
             
              <div class="clearfix"></div>
             
              <hr style="border: 1px solid #000;">
      
              
              <div class="form-group">
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_hombre.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control center-block tag_event" name="event_tag[]" value="hombre">
                </div>
                
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_mujer.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="mujer">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_mayores.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="mayores">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_pareja.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="pareja">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_familia.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="familia">
                </div>

              </div>

              <div class="clearfix"></div>
              <br>

              <div class="form-group">
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_empowerment.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control center-block tag_event" name="event_tag[]" value="empowerment">
                </div>
                
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_sexualidad.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="sexualidad">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_tacto.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="tacto">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_musica.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="musica">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_movimiento.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="movimiento">
                </div>

              </div>

              <div class="clearfix"></div>
              <br>

              <div class="form-group">
                
                <div class="col-xs-2 col-xs-offset-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_sabor.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="sabor">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_comunidad.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="comunidad">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_meditacion.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left tag_event" name="event_tag[]" value="meditacion">
                </div>


              </div>

              
              <div class="clearfix"></div>
              <br>
              
              <button type="submit" id="fire" class="btn btn-default pull-right">Submit</button>

            </form>
          </div>
        </div>
      </div>

      <div class="col-xs-4">
      </div>

    </div>

  </div>
</div>

<br>