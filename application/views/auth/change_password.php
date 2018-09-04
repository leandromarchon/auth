<!-- Conteúdo central -->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h1 class="page-header"><?php echo lang('change_password_heading');?></h1>

      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open("auth/change_password", array('class' => 'form-horizontal'));?>

            <!-- password -->
            <div class="form-group">
                  <label class="col-sm-4 control-label"><?php echo lang('change_password_old_password_label', 'old_password');?></label>
                  <div class="col-sm-4">
                        <?php $attributes = array('class' => 'form-control', 'id' => 'old', 'name' => 'old');?>
                        <?php echo form_input($attributes);?>            
                  </div>
            </div>

            <!-- new password -->
            <div class="form-group">
                  <label class="col-sm-4 control-label"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label>
                  <div class="col-sm-4">
                        <?php $attributes = array('class' => 'form-control', 'id' => 'new', 'name' => 'new', 'pattern' => '^.{0}.*$');?>
                        <?php echo form_input($attributes);?>            
                  </div>
            </div>

            <!-- new password confirm -->
            <div class="form-group">
                  <label class="col-sm-4 control-label"><?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?></label>
                  <div class="col-sm-4">
                        <?php $attributes = array('class' => 'form-control', 'id' => 'new_confirm', 'name' => 'new_confirm', 'pattern' => '^.{0}.*$');?>
                        <?php echo form_input($attributes);?>            
                  </div>
            </div>

            <?php echo form_input($user_id);?>

            <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                        <?php $attributes = array('class' => 'btn btn-primary', 'type' => 'submit', 'value' => 'Alterar Senha');?>
                        <?php echo form_submit($attributes);?>

                        <a class="btn btn-danger" href="<?php echo base_url('home');?>">Cancelar</a>
                  </div>
            </div>

      <?php echo form_close();?>
</div>