<div class="rowlac-row-padding">
  <div class="col-xs-12">

    <div class="row">
      <div class="col-xs-12">
        <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">PROFILE</h2>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <form>
          <div class="form-group">
            <div class="col-xs-3" style="padding-left: 0; padding-right: 0;">
              <img src="<?=base_url('love_academy_files/users/avatars/'.$this->session->avatar)?>" class="img-responsive" style="width: 250px; height: 250px; border: 1px solid #000;" readonly>
              <!-- <p class="help-block text-center">UPLOAD IMAGE</p> -->
            </div>
            <div class="col-xs-9" style="">
              <input type="email" class="form-control" id="email" value="<?=$this->session->name?>" readonly>
              <br>
              <textarea type="email" class="form-control" id="email" style="height: 142px; background-color: transparent;" readonly><?=$this->session->bio?></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">

        <?php if( $this->session->skype != '' ): ?>
          <div class="pull-right" style="padding-left: 10px; padding-right: 10px;">
            <a href="skype:<?=$this->session->skype?>?userinfo"><img src="<?=base_url('resources/images/icons/skype.png')?>"></a>
          </div>
        <?php endif;?>

        <?php if( $this->session->facebook != '' ): ?>
          <div class="pull-right" style="padding-left: 10px; padding-right: 10px;">
            <a href="<?=$this->session->facebook?>"><img src="<?=base_url('resources/images/icons/facebook.png')?>"></a>
          </div>
        <?php endif;?>

        <?php if( $this->session->twitter != '' ): ?>
        <div class="pull-right" style="padding-left: 10px; padding-right: 10px;">
          <a href="<?=$this->session->twitter?>"><img src="<?=base_url('resources/images/icons/twitter.png')?>"></a>
        </div>
        <?php endif;?>

        
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <div class="pull-right">
          <button class="btn btn-default">Edit</button>
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-xs-12">
        <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">EXPERIENCES</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">DONE</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <table id="calendar_done"></table>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">TODO</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <table id="calendar_todo"></table>
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">INTERESTED</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
      </div>
    </div>

    <hr>

    <div class="row">
      <div class="col-xs-12">
        <h2 class="title-text" style="padding-bottom: 10px; border-bottom: 3px solid #000;">KNOWLEDGE</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">BLOG</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <table id="table_blog"></table>
      </div>
    </div>

    <hr>


    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">A QUESTION OF LOVE</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <table id="calendar"></table>
      </div>
    </div>

    <hr> 

    <div class="row">
      <div class="col-xs-12">
        <div class="lac-title-row-subsection">
          <p class="pull-right">DOWNLOADS</p>
        </div>
      </div>
    </div>

    <br>

    <div class="row">
      <div class="col-xs-12">
        <table id="downloads"></table>
      </div>
    </div>
    <br>
  </div>

</div>
