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
         <?php $this->load->view('/menu');?>

        <h2 style="margin-top:0px">Pengguna <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">NoKP <?php echo form_error('NoKP') ?></label>
            <input type="text" class="form-control" name="NoKP" id="NoKP" placeholder="NoKP" value="<?php echo $NoKP; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('Password') ?></label>
            <input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Email <?php echo form_error('Email') ?></label>
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Bahagian <?php echo form_error('Bahagian') ?></label>
            <input type="text" class="form-control" name="Bahagian" id="Bahagian" placeholder="Bahagian" value="<?php echo $Bahagian; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jawatan <?php echo form_error('Jawatan') ?></label>
            <input type="text" class="form-control" name="Jawatan" id="Jawatan" placeholder="Jawatan" value="<?php echo $Jawatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Level <?php echo form_error('Level') ?></label>
            <input type="text" class="form-control" name="Level" id="Level" placeholder="Level" value="<?php echo $Level; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Iid <?php echo form_error('iid') ?></label>
            <input type="text" class="form-control" name="iid" id="iid" placeholder="Iid" value="<?php echo $iid; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('Status') ?></label>
            <input type="text" class="form-control" name="Status" id="Status" placeholder="Status" value="<?php echo $Status; ?>" />
        </div>
	    <input type="hidden" name="pid" value="<?php echo $pid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pengguna') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>