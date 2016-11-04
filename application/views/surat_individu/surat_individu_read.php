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
        <h2 style="margin-top:0px">Surat_individu Read</h2>
        <table class="table">
	    <tr><td>Tarikh</td><td><?php echo $Tarikh; ?></td></tr>
	    <tr><td>Sid</td><td><?php echo $sid; ?></td></tr>
	    <tr><td>Penghantar</td><td><?php echo $Penghantar; ?></td></tr>
	    <tr><td>Minit</td><td><?php echo $Minit; ?></td></tr>
	    <tr><td>Penerima</td><td><?php echo $Penerima; ?></td></tr>
	    <tr><td>Catatan</td><td><?php echo $Catatan; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $Status; ?></td></tr>
	    <tr><td>Email Status</td><td><?php echo $Email_Status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat_individu') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>