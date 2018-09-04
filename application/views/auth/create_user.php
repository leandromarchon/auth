<!-- Conteúdo central -->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header"><?php echo lang('create_user_heading');?></h1>

  <p class="alert alert-warning"><?php echo lang('create_user_subheading');?></p>

  <div id="infoMessage"><?php echo $message;?></div>

  <?php echo form_open("auth/create_user", array('class' => 'form-horizontal'));?>

        <!-- first name -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'first_name', 'name' => 'first_name');?>
            <?php echo form_input($attributes);?>            
          </div>
        </div>

        <!-- last name -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'last_name', 'name' => 'last_name');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>        
        
        <!-- identity -->
        <?php if($identity_column!=='email'): ?>
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo lang('create_user_identity_label', 'identity');?></label>
            <?php echo form_error('identity'); ?>
            <div class="col-sm-4">
              <?php $attributes = array('class' => 'form-control', 'id' => 'identity', 'name' => 'identity');?>
              <?php echo form_input($attributes);?>
            </div>
          </div>
        <?php endif; ?>

        <!-- company -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_company_label', 'company');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'company', 'name' => 'company');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>

        <!-- email -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_email_label', 'email');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'email', 'name' => 'email');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>

        <!-- phone -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_phone_label', 'phone');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'phone', 'name' => 'phone');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>

        <!-- password -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_password_label', 'password');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'password', 'name' => 'password');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>

        <!-- password confirm -->
        <div class="form-group">
          <label class="col-sm-2 control-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
          <div class="col-sm-4">
            <?php $attributes = array('class' => 'form-control', 'id' => 'password_confirm', 'name' => 'password_confirm');?>
            <?php echo form_input($attributes);?>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <?php $attributes = array('class' => 'btn btn-primary', 'type' => 'submit', 'value' => lang('create_user_submit_btn'));?>
            <?php echo form_submit($attributes);?>

            <a class="btn btn-danger" href="<?php echo base_url('auth/users');?>">Cancelar</a>
          </div>
        </div>

  <?php echo form_close();?>

</div>