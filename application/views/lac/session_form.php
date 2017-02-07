<div class="row">
  <div class="col-xs-12">

    <div class="row lac-row-padding">

      <div class="col-xs-8">
        <div class="row">
          
          <div class="col-xs-12">
            <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">SESSION FORM</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-xs-12">
            <form role="form" id="form_new_user" enctype="multipart/form-data">
              
             <!--  <div class="form-group">
               <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                 <img id="image_profile" src="<?=base_url('love_academy_files/users/avatars/avatar_user_default.jpg')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                 <p class="help-block text-center" style="cursor: pointer;" id="upload_image">UPLOAD IMAGE</p>
                 <div hidden>
                   <input type="file" name="avatar" id="input_image" >
                 </div>
               </div>
               <div class="col-xs-8" style="">
                 <label for="pwd">DISPLAY NAME *</label>
                 <input type="text" class="form-control" id="name" name="display_name">
                 <br>
                 <label for="pwd">BIO</label>
                 <textarea class="form-control" id="bio" type="text" name="bio" style="height: 142px; background-color: transparent; "></textarea>
               </div>
             </div>
             
             <div class="clearfix"></div>
             
             <hr style="border: 1px solid #000;"> -->
              
              <br>

              <div class="form-group">
                <label for="form_birthday">SESSION NAME</label>
                <input type="text" class="form-control" id="form_birthday" placeholder="" name="facebook">
              </div>

              <br>

              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">DATE (DD/MM/YY)</label>
                  <input type="text" class="form-control pull-left" id="first_name" name="name">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">SCHEDULE (24 HOURS CLOCK)</label>
                  <input type="text" class="form-control pull-right" id="last_name" name="last_name">
                  <!-- <p class="help-block">Last Name</p> -->
                </div>
              </div>
              <div class="clearfix"></div>
              <br>
              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">DURATION</label>
                  <input type="text" class="form-control pull-left" id="first_name" name="name">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">COST (USD)</label>
                  <input type="text" class="form-control pull-right" id="last_name" name="last_name">
                  <!-- <p class="help-block">Last Name</p> -->
                </div>
              </div>
              
              <div class="clearfix"></div>
              <br>
              <hr style="border: 1px solid #000;">
              <br>

              <div class="form-group">
                <label for="pwd">SHORT DESCRIPTION - SESSION</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>

              <br>

              <div class="form-group">
                <label for="pwd">DESCRIPTION - SESSION</label>
                <input type="text" class="form-control" id="skype_name" name="skype">
              </div>

              <br>

              
              <div class="form-group lac-select">
                <label for="gender">TYPE OF SESSION</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control " id="lac-select" name="gender">
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
                  <select class="form-control " id="lac-select" name="gender">
                    <option value="SUGGESTED">SUGGESTED EVENT</option>
                  </select>
                </div>
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group">
                <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                  <img id="image_profile" src="<?=base_url('love_academy_files/default/default_upload_image.png')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image">UPLOAD IMAGE</p>
                  <div hidden>
                    <input type="file" name="avatar" id="input_image" >
                  </div>
                </div> 
              </div>
             
             <div class="clearfix"></div>
             

              <div class="form-group">
                <label for="pwd">ADDRESS</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <br>

              <div class="form-group">
                <label for="pwd">LINK GOOGLE MAPS</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">CAPACITY AVAILABLE</label>
                  <input type="text" class="form-control pull-left" id="first_name" name="name">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
                
                <div class="col-xs-6" style="padding-right: 0;">
                  <label for="name">CATEGORY</label>
                  <input type="text" class="form-control pull-right" id="last_name" name="last_name">
                  <!-- <p class="help-block">Last Name</p> -->
                </div>
              </div>
              
              <div class="clearfix"></div>
              
              <h5 style="background: #ddd; padding: 10px; letter-spacing: 4px;">PROGRAMS</h5>
              
              <br>

              <div class="form-group">
                <div class="col-xs-6" style="padding-left: 0;">
                  <label for="name">SCHEDULE (24 HOURS CLOCK)</label>
                  <input type="text" class="form-control pull-left" id="first_name" name="name">
                  <!-- <p class="help-block">First Name</p> -->
                </div>
              </div>

              <div class="clearfix"></div>
              <br>
              <h5 style="background: #ddd; padding: 10px; letter-spacing: 4px;">PROMO CODE</h5>
              


              <div class="form-group">
                <label for="pwd">DESCRIPTION</label>
                <textarea class="form-control" id="bio" type="text" name="bio" style="height: 142px; background-color: transparent; "></textarea>
              </div>

              <br>

              <div class="form-group">
                <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                  <img id="image_profile" src="<?=base_url('love_academy_files/default/default_upload_image.png')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image">UPLOAD IMAGE</p>
                  <div hidden>
                    <input type="file" name="avatar" id="input_image" >
                  </div>
                </div>
                <div class="col-xs-8" style="">
                  <label for="gender">TYPE OF PROMO</label>
                  <br>
                  <div class="col-xs-4" style="padding-left: 0;">
                    <select class="form-control " id="lac-select" name="gender">
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
                  <input type="checkbox" class="form-control center-block" id="first_name" name="name">
                </div>
                
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_mujer.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_mayores.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_pareja.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_familia.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

              </div>

              <div class="clearfix"></div>
              <br>

              <div class="form-group">
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_empowerment.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control center-block" id="first_name" name="name">
                </div>
                
                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_sexualidad.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_tacto.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_musica.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_movimiento.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

              </div>

              <div class="clearfix"></div>
              <br>

              <div class="form-group">
                
                <div class="col-xs-2 col-xs-offset-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_sabor.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_comunidad.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
                </div>

                <div class="col-xs-2" style="padding-left: 0;">
                  <img src="<?=base_url('resources/images/icons/type_meditacion.png')?>" alt="" class="img img-responsive">
                  <input type="checkbox" class="form-control pull-left" id="first_name" name="name">
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