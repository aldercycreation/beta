<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Surat_individu <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="datetime">Tarikh <?php echo form_error('Tarikh') ?></label>
            <input type="text" class="form-control" name="Tarikh" id="Tarikh" placeholder="Tarikh" value="<?php echo $Tarikh; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Sid <?php echo form_error('sid') ?></label>
            <input type="text" class="form-control" name="sid" id="sid" placeholder="Sid" value="<?php echo $sid; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Penghantar <?php echo form_error('Penghantar') ?></label>
            <input type="text" class="form-control" name="Penghantar" id="Penghantar" placeholder="Penghantar" value="<?php echo $Penghantar; ?>" />
        </div>
	    <div class="form-group">
            <label for="Minit">Minit <?php echo form_error('Minit') ?></label>
            <textarea class="form-control" rows="3" name="Minit" id="Minit" placeholder="Minit"><?php echo $Minit; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Penerima <?php echo form_error('Penerima') ?></label>
            <input type="text" class="form-control" name="Penerima" id="Penerima" placeholder="Penerima" value="<?php echo $Penerima; ?>" />
        </div>
	    <div class="form-group">
            <label for="Catatan">Catatan <?php echo form_error('Catatan') ?></label>
            <textarea class="form-control" rows="3" name="Catatan" id="Catatan" placeholder="Catatan"><?php echo $Catatan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('Status') ?></label>
            <input type="text" class="form-control" name="Status" id="Status" placeholder="Status" value="<?php echo $Status; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Email Status <?php echo form_error('Email_Status') ?></label>
            <input type="text" class="form-control" name="Email_Status" id="Email_Status" placeholder="Email Status" value="<?php echo $Email_Status; ?>" />
        </div>
	    <input type="hidden" name="siid" value="<?php echo $siid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_individu') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>