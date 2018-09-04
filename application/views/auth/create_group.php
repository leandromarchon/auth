<!-- Conteúdo central -->
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
	<h1 class="page-header"><?php echo lang('create_group_heading');?></h1>

	<p class="alert alert-warning"><?php echo lang('create_group_subheading');?></p>

	<div id="infoMessage"><?php echo $message;?></div>

	<?php echo form_open("auth/create_group", array('class' => 'form-horizontal'));?>
		<!-- group_name -->
		<div class="form-group">
			<label class="col-sm-2 control-label"><?php echo lang('create_group_name_label', 'group_name');?></label>
			<div class="col-sm-4">
				<?php $attributes = array('class' => 'form-control', 'id' => 'group_name', 'name' => 'group_name');?>
				<?php echo form_input($attributes);?>
			</div>
		</div>

		<!-- description -->
		<div class="form-group">
			<label class="col-sm-2 control-label"><?php echo lang('create_group_desc_label', 'description');?></label>
			<div class="col-sm-4">
				<?php $attributes = array('class' => 'form-control', 'id' => 'description', 'name' => 'description');?>
				<?php echo form_input($attributes);?>
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<?php $attributes = array('class' => 'btn btn-primary', 'type' => 'submit', 'value' => lang('create_group_submit_btn'));?>
				<?php echo form_submit($attributes);?>

				<a href="<?php echo base_url('auth/users');?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>

	<?php echo form_close();?>
</div>