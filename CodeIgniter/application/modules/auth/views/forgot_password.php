<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<div class="container">
	<h1><?php echo lang('forgot_password_heading');?></h1>
	<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
	<?php echo (isset($message)) ? "<div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>$message</strong>
  	</div>" : '' ?>
	<!--<div id="infoMessage"><?php echo $message;?></div>-->

	<?php echo form_open("auth/forgot_password");?>

	      <p>
	      	<label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br />
	      	<?php echo form_input($identity,null,'class="form-control"');?>
	      </p>

	      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-primary"');?></p>

	<?php echo form_close();?>
</div>