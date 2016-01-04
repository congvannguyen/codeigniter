<h1><?php echo lang('edit_user_heading');?></h1>
<p><?php echo lang('edit_user_subheading');?></p>
<?php echo (isset($message)) ? "<div class=\"alert alert-danger\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
<strong>$message</strong>
</div>" : '' ?>
<?php echo form_open(uri_string());?>

<p>
  <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
  <?php echo form_input($first_name,null,'class="form-control"');?>
</p>

<p>
  <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
  <?php echo form_input($last_name,null,'class="form-control"');?>
</p>

<p>
  <?php echo lang('edit_user_company_label', 'company');?> <br />
  <?php echo form_input($company,null,'class="form-control"');?>
</p>

<p>
  <?php echo lang('edit_user_phone_label', 'phone');?> <br />
  <?php echo form_input($phone,null,'class="form-control"');?>
</p>

<p>
  <?php echo lang('edit_user_password_label', 'password');?> <br />
  <?php echo form_input($password,null,'class="form-control"');?>
</p>

<p>
  <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
  <?php echo form_input($password_confirm,null,'class="form-control"');?>
</p>

<?php if ($this->ion_auth->is_admin()): ?>

  <h3><?php echo lang('edit_user_groups_heading');?></h3>
  <?php foreach ($groups as $group):?>
    <div class="checkbox">
      <?php
      $gID=$group['id'];
      $checked = null;
      $item = null;
      foreach($currentGroups as $grp) {
        if ($gID == $grp->id) {
          $checked= ' checked="checked"';
          break;
      }
  }
  ?>
  <label>
    <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
    <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
</label>
</div>
<?php endforeach?>
<?php endif ?>

<?php echo form_hidden('id', $user->id);?>
<?php echo form_hidden($csrf); ?>

<p><?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn btn-primary"');?></p>

<?php echo form_close();?>