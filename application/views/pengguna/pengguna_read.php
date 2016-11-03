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
        <h2 style="margin-top:0px">Pengguna Read</h2>
        <table class="table">
	    <tr><td>NoKP</td><td><?php echo $NoKP; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $Password; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $Email; ?></td></tr>
	    <tr><td>Nama</td><td><?php echo $Nama; ?></td></tr>
	    <tr><td>Bahagian</td><td><?php echo $Bahagian; ?></td></tr>
	    <tr><td>Jawatan</td><td><?php echo $Jawatan; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $Level; ?></td></tr>
	    <tr><td>Iid</td><td><?php echo $iid; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $Status; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pengguna') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>