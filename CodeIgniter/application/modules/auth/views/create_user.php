<h1><?php echo lang('create_user_heading'); ?></h1>
<p><?php echo lang('create_user_subheading'); ?></p>
<?php echo (isset($message)) ? "<div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>$message</strong>
    </div>" : '' ?>
<!--<div id="infoMessage"><?php echo $message; ?></div>-->

<?php echo form_open("auth/create_user"); ?>
<p>
    <?php echo lang('create_user_username_label', 'username'); ?> <br/>
    <?php echo form_input($username, null, 'class="form-control"'); ?>
</p>
<p>
    <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
    <?php echo form_input($first_name, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
    <?php echo form_input($last_name, null, 'class="form-control"'); ?>
</p>

<?php
if ($identity_column !== 'email') {
    echo '<p>';
    echo lang('create_user_identity_label', 'identity');
    echo '<br />';
    echo form_error('identity');
    echo form_input($identity);
    echo '</p>';
}
?>

<p>
    <?php echo lang('create_user_company_label', 'company'); ?> <br />
    <?php echo form_input($company, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('create_user_email_label', 'email'); ?> <br />
    <?php echo form_input($email, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
    <?php echo form_input($phone, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('create_user_password_label', 'password'); ?> <br />
    <?php echo form_input($password, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
    <?php echo form_input($password_confirm, null, 'class="form-control"'); ?>
</p>


<p><?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn btn-primary"'); ?></p>

<?php echo form_close(); ?>