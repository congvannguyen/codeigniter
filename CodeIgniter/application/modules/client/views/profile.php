<?php $upload = array('name' => 'img', 'size' => '25') ?>
<?php echo form_open_multipart(base_url('client/doupload')); ?>

<div class="form-group">
    <label for="">Avatar</label>
    <?php 
    echo form_upload($upload);
    echo form_submit('upload', 'Upload');
    ?>
</div>
<?php echo form_close();