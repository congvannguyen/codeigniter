<title>Login</title>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('resource/css/form-signin.css'); ?>">
<div class="container" style="width:450px;margin-top:100px">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h3 class="panel-title"><?php echo lang('login_heading');?></h3>
    </div>
    <div class="panel-body" style="padding-top:30px">
      <!--<h1><?php echo lang('login_heading');?></h1>-->
      <!--<p><?php echo lang('login_subheading');?></p>-->
      <?php echo (isset($message)) ? "<div class=\"alert alert-danger\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
      <strong>$message</strong>
    </div>" : '' ?>
    <!--<div id="infoMessage"><?php echo $message;?></div>-->

    <?php echo form_open("auth/login");?>
    <div class="form-group">
      <p>
        <!--<?php echo lang('login_identity_label', 'identity');?>-->
      </p>
      <div class="input-group" style="margin-bottom: 25px">

        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <?php
        $data = array(
          'name'=>'identity',
          'class'=>'form-control',
          'id'=>'login-username',
          'placeholder'=>'username or email'
          );
        echo form_input($data);
        ?>
      </div>
      <p>
        <!--<?php echo lang('login_password_label', 'password');?>-->
      </p>
      <div class="input-group" style="margin-bottom: 25px">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <?php
        $data = array(
          'name'=>'password',
          'type'=>'password',
          'placeholder'=>'password',
          'class'=>'form-control'
          );
        echo form_input($data);
        ?>
        <!--<input type="password" placeholder="password" name="password" class="form-control" id="login-password">-->
      </div>
      <div class="input-group">
        <div class="checkbox">
          <label>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
            <?php echo lang('login_remember_label', 'remember');?>
            <!--<input type="checkbox" value="1" name="remember" id="login-remember"> Remember me-->
          </label>
          <a href="forgot_password" style="margin-left:95px"><?php echo lang('login_forgot_password');?></a>
        </div>

      </div>
      <div class="form-group" style="margin-top:10px;">

        <div class="col-sm-12 controls" style="padding-left:0px;">
        <?php
        $data = array(
          'type'=>'submit',
          'value'=>lang('login_submit_btn'),
          'class'=>'btn btn-success');
        echo form_submit($data);
        ?>
          <!-- <a class="btn btn-success" href="#" id="btn-login">Login  </a> -->
          <a class="btn btn-primary" href="<" id="btn-fblogin">Login with Facebook</a>

        </div>
      </div>
    </div>
    <?php echo form_close();?>
    <!--<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>-->
  </div>
</div>
</div>
<!-- jQuery -->
<script src="//code.jquery.com/jquery.js"></script>
<!-- Bootstrap JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>