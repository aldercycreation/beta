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
        <h2 style="margin-top:0px">Pejawatan_staffdetails <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="date">Lantikan Date <?php echo form_error('lantikan_date') ?></label>
            <input type="text" class="form-control" name="lantikan_date" id="lantikan_date" placeholder="Lantikan Date" value="<?php echo $lantikan_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Sah Date <?php echo form_error('sah_date') ?></label>
            <input type="text" class="form-control" name="sah_date" id="sah_date" placeholder="Sah Date" value="<?php echo $sah_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Pencen Date <?php echo form_error('pencen_date') ?></label>
            <input type="text" class="form-control" name="pencen_date" id="pencen_date" placeholder="Pencen Date" value="<?php echo $pencen_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Gaji Date <?php echo form_error('gaji_date') ?></label>
            <input type="text" class="form-control" name="gaji_date" id="gaji_date" placeholder="Gaji Date" value="<?php echo $gaji_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Skim Pencen <?php echo form_error('skim_pencen') ?></label>
            <input type="text" class="form-control" name="skim_pencen" id="skim_pencen" placeholder="Skim Pencen" value="<?php echo $skim_pencen; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tamatkontrak Date <?php echo form_error('tamatkontrak_date') ?></label>
            <input type="text" class="form-control" name="tamatkontrak_date" id="tamatkontrak_date" placeholder="Tamatkontrak Date" value="<?php echo $tamatkontrak_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nofail <?php echo form_error('nofail') ?></label>
            <input type="text" class="form-control" name="nofail" id="nofail" placeholder="Nofail" value="<?php echo $nofail; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Name <?php echo form_error('name') ?></label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo $name; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Icno <?php echo form_error('icno') ?></label>
            <input type="text" class="form-control" name="icno" id="icno" placeholder="Icno" value="<?php echo $icno; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Post Id <?php echo form_error('post_id') ?></label>
            <input type="text" class="form-control" name="post_id" id="post_id" placeholder="Post Id" value="<?php echo $post_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Dept Id <?php echo form_error('dept_id') ?></label>
            <input type="text" class="form-control" name="dept_id" id="dept_id" placeholder="Dept Id" value="<?php echo $dept_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Grade Id <?php echo form_error('grade_id') ?></label>
            <input type="text" class="form-control" name="grade_id" id="grade_id" placeholder="Grade Id" value="<?php echo $grade_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Start Date <?php echo form_error('start_date') ?></label>
            <input type="text" class="form-control" name="start_date" id="start_date" placeholder="Start Date" value="<?php echo $start_date; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Scheme Id <?php echo form_error('scheme_id') ?></label>
            <input type="text" class="form-control" name="scheme_id" id="scheme_id" placeholder="Scheme Id" value="<?php echo $scheme_id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Username <?php echo form_error('username') ?></label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Password <?php echo form_error('password') ?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Type <?php echo form_error('type') ?></label>
            <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?php echo $type; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Level <?php echo form_error('level') ?></label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo $level; ?>" />
        </div>
	    <input type="hidden" name="staff_id" value="<?php echo $staff_id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('pejawatan_staffdetails') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>