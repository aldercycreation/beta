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
        <h2 style="margin-top:0px">Pejawatan_staffdetails Read</h2>
        <table class="table">
	    <tr><td>Lantikan Date</td><td><?php echo $lantikan_date; ?></td></tr>
	    <tr><td>Sah Date</td><td><?php echo $sah_date; ?></td></tr>
	    <tr><td>Pencen Date</td><td><?php echo $pencen_date; ?></td></tr>
	    <tr><td>Gaji Date</td><td><?php echo $gaji_date; ?></td></tr>
	    <tr><td>Skim Pencen</td><td><?php echo $skim_pencen; ?></td></tr>
	    <tr><td>Tamatkontrak Date</td><td><?php echo $tamatkontrak_date; ?></td></tr>
	    <tr><td>Nofail</td><td><?php echo $nofail; ?></td></tr>
	    <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	    <tr><td>Icno</td><td><?php echo $icno; ?></td></tr>
	    <tr><td>Post Id</td><td><?php echo $post_id; ?></td></tr>
	    <tr><td>Dept Id</td><td><?php echo $dept_id; ?></td></tr>
	    <tr><td>Grade Id</td><td><?php echo $grade_id; ?></td></tr>
	    <tr><td>Start Date</td><td><?php echo $start_date; ?></td></tr>
	    <tr><td>Scheme Id</td><td><?php echo $scheme_id; ?></td></tr>
	    <tr><td>Username</td><td><?php echo $username; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Type</td><td><?php echo $type; ?></td></tr>
	    <tr><td>Level</td><td><?php echo $level; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pejawatan_staffdetails') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>