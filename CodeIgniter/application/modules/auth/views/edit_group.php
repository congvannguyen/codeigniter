<h1><?php echo lang('edit_group_heading'); ?></h1>
<p><?php echo lang('edit_group_subheading'); ?></p>
<?php echo (isset($message)) ? "<div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <strong>$message</strong>
  	</div>" : '' ?>
<!--<div id="infoMessage"><?php echo $message; ?></div>-->

<?php echo form_open(current_url()); ?>

<p>
    <?php echo lang('edit_group_name_label', 'group_name'); ?> <br />
    <?php echo form_input($group_name, null, 'class="form-control"'); ?>
</p>

<p>
    <?php echo lang('edit_group_desc_label', 'description'); ?> <br />
    <?php echo form_input($group_description, null, 'class="form-control"'); ?>
</p>

<p><?php echo form_submit('submit', lang('edit_group_submit_btn'), 'class="btn btn-primary"'); ?></p>

<?php echo form_close(); ?>