<div class="row">
  <div class="col-xs-12">

    <div class="row lac-row-padding">

      <div class="col-xs-8">
        <div class="row">
          
          <div class="col-xs-12">
            <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">TEACHER REGISTRATION</h2>
          </div>

        </div>

        <div class="row">
          <div class="col-xs-12">
            <form role="form" id="form_new_teacher" enctype="multipart/form-data">
              
              <div class="form-group">
                <div class="col-xs-4" style="padding-left: 0; padding-right: 0;">
                  <img id="image_profile" src="<?=base_url('love_academy_files/users/avatars/avatar_user_default.jpg')?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;">
                  <p class="help-block text-center" style="cursor: pointer;" id="upload_image" data-toggle="modal" data-target="#modal_crop_image">UPLOAD IMAGE</p>
                  <div hidden>
                    <input type="file" name="avatar" id="input_image">
                  </div>
                </div>
                <div class="col-xs-8" style="">
                  <!-- <label for="pwd">DISPLAY NAME *</label>
                  <input type="text" class="form-control" id="name" name="display_name">
                  <br> -->
                  <label for="pwd">BIO</label>
                  <textarea class="form-control" id="bio" type="text" name="bio" style="height: 232px; background-color: transparent; "></textarea>
                </div>
              </div>

              <div class="clearfix"></div>

              <hr style="border: 1px solid #000;">

              <h5 class="lac-letter-spacing">YOUR LINKS (OPTIONAL)</h5>

              <hr>

              <div class="form-group">
                <label for="form_birthday">FACEBOOK</label>
                <input type="text" class="form-control" id="form_birthday" placeholder="" name="facebook">
              </div>

              <br>

              <div class="form-group">
                <label for="form_birthday">INSTAGRAM</label>
                <input type="text" class="form-control" id="form_birthday" placeholder="" name="instagram">
              </div>

              <br>

              <div class="form-group">
                <label for="form_birthday">TWITTER</label>
                <input type="text" class="form-control" id="form_birthday" placeholder="" name="twitter">
              </div>

              <br>

              <hr style="border: 1px solid #000;">

              <br>

              <div class="form-group">
                <label for="name">NAME *</label>
                <br>
                <div class="col-xs-6" style="padding-left: 0;">
                  <input type="text" class="form-control pull-left" id="first_name" name="name">
                  <p class="help-block">First Name</p>
                </div>
                <div class="col-xs-6" style="padding-right: 0;">
                  <input type="text" class="form-control pull-right" id="last_name" name="last_name">
                  <p class="help-block">Last Name</p>
                </div>
              </div>

              <div class="form-group">
                <label for="pwd">EMAIL *</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>

              <div class="form-group">
                <label for="pwd">SKYPE NAME *</label>
                <input type="text" class="form-control" id="skype_name" name="skype">
              </div>

              <div class="form-group lac-select">
                <label for="gender">GENDER *</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control " id="lac-select" name="gender">
                    <option value="masculine">MASCULINE</option>
                    <option value="female">FEMALE</option>
                  </select>
                </div>
              </div>

              <div class="clearfix"></div>

              <br>

              <div class="form-group">
                <label for="pwd">PASSWORD *</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>

              <div class="form-group">
                <label for="pwd">CONFIRM PASSWORD *</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
              </div>

              <div class="clearfix"></div>

              <br>
              
              <h5 for="gender">WHERE DO YOU LIVE?</h5>
              
              <hr style="border: 1px solid #000;">

              <div class="form-group lac-select">
                <label for="gender">COUNTRY OF RESIDENCE *</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control" id="countryId" name="country">
                  </select>
                </div>
              </div>

              <hr>

              <div class="form-group lac-select">
                <label for="gender">STATE OF RESIDENCE *</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control" id="stateId" name="state">
                    <option value="0">SELECT STATE</option>
                  </select>
                </div>
              </div>

              <hr>

              <div class="form-group lac-select">
                <label for="gender">CITY OF RESIDENCE *</label>
                <br>
                <div class="col-xs-4" style="padding-left: 0;">
                  <select class="form-control" id="cityId" name="cities_id">
                    <option value="0">SELECT CITY</option>
                  </select>
                </div>
              </div>
              
              <hr>

              <div class="form-group">
                <label for="optradio">LANGUAGE *</label>
                <br>
                <div class="col-xs-12">
                  <div class="radio">
                    <label class="radio-inline"><input type="radio" name="language" checked="checked" value="1">ENGLISH</label>&nbsp;&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="language" value="2">SPANISH</label>&nbsp;&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="language" value="3">FRENCH</label>&nbsp;&nbsp;&nbsp;
                    <label class="radio-inline"><input type="radio" name="language" value="4">RUSSIAN</label>&nbsp;&nbsp;&nbsp;
                  </div>
                </div>
              </div>

              <hr>

              <div class="form-group">
                <label for="pwd">CEL PHONE *</label>
                <input type="number" class="form-control" id="phone" name="phone">
              </div>

              <hr>

              <h5 for="gender">YOUR BIRTH INFO</h5>
              
              <hr style="border: 1px solid #000;">

              <hr>

              <div class="form-group">
                <label for="pwd">BIRTH DATE *</label>
                <br>
                <div class="col-xs-6">
                  <input type="text"  class="form-control" name="birth_date" id="birth_date">
                </div>
              </div>
      
              <div class="clearfix"></div>


              <div class="form-group">
                <label for="pwd">BIRTH TIME (OPTIONAL)</label>
                <br>
                <div class="col-xs-6">
                  <input type="text" class="form-control" name="birth_hour" id="birth_hour">
                </div>
              </div>
    
              <div class="clearfix"></div>

              <br>

              <h5 for="gender">CATEGORIES *</h5>
              <hr style="border: 1px solid #000;">

              <div class="form-group">
                <div class="col-xs-4">
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="love"></input>LOVE</li>
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="healing_arts"></input>HEALING ARTS</li>
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="energy"></input>ENERGY</li>  
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="chakras"></input>CHAKRAS</li>
                </div>

                <div class="col-xs-4">
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="philosofy"></input>PHILOSOFY</li>
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="life"></input>LIFE</li>
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="sexuality"></input>SEXUALITY</li>
                  <li><input type="checkbox" class="radio-option" name="categories[]" value="essence"></input>ESSENCE</li>
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

<!-- Modal -->
<div class="modal fade" id="modal_crop_image" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Crop Image</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          
          <div class="col-xs-12">
            <input type="file" class="avatar-input" id="avatarInputAvatar" name="avatar_file">
            <img id="crop_image" class="img img-responsive" src="">    
          </div>

        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="cropImageButton">Crop Image</button>
      </div>
    </div>
  </div>
</div>