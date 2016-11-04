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
        <h2 style="margin-top:0px">Drop_kategori <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('Kategori') ?></label>
            <input type="text" class="form-control" name="Kategori" id="Kategori" placeholder="Kategori" value="<?php echo $Kategori; ?>" />
        </div>
	    <input type="hidden" name="dkid" value="<?php echo $dkid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('drop_kategori') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>