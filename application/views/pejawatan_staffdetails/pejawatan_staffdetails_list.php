<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <h2 style="margin-top:0px">Pejawatan_staffdetails List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pejawatan_staffdetails/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Lantikan Date</th>
		    <th>Sah Date</th>
		    <th>Pencen Date</th>
		    <th>Gaji Date</th>
		    <th>Skim Pencen</th>
		    <th>Tamatkontrak Date</th>
		    <th>Nofail</th>
		    <th>Name</th>
		    <th>Icno</th>
		    <th>Post Id</th>
		    <th>Dept Id</th>
		    <th>Grade Id</th>
		    <th>Start Date</th>
		    <th>Scheme Id</th>
		    <th>Username</th>
		    <th>Password</th>
		    <th>Type</th>
		    <th>Level</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pejawatan_staffdetails_data as $pejawatan_staffdetails)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pejawatan_staffdetails->lantikan_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->sah_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->pencen_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->gaji_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->skim_pencen ?></td>
		    <td><?php echo $pejawatan_staffdetails->tamatkontrak_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->nofail ?></td>
		    <td><?php echo $pejawatan_staffdetails->name ?></td>
		    <td><?php echo $pejawatan_staffdetails->icno ?></td>
		    <td><?php echo $pejawatan_staffdetails->post_id ?></td>
		    <td><?php echo $pejawatan_staffdetails->dept_id ?></td>
		    <td><?php echo $pejawatan_staffdetails->grade_id ?></td>
		    <td><?php echo $pejawatan_staffdetails->start_date ?></td>
		    <td><?php echo $pejawatan_staffdetails->scheme_id ?></td>
		    <td><?php echo $pejawatan_staffdetails->username ?></td>
		    <td><?php echo $pejawatan_staffdetails->password ?></td>
		    <td><?php echo $pejawatan_staffdetails->type ?></td>
		    <td><?php echo $pejawatan_staffdetails->level ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('pejawatan_staffdetails/read/'.$pejawatan_staffdetails->staff_id),'Read'); 
			echo ' | '; 
			echo anchor(site_url('pejawatan_staffdetails/update/'.$pejawatan_staffdetails->staff_id),'Update'); 
			echo ' | '; 
			echo anchor(site_url('pejawatan_staffdetails/delete/'.$pejawatan_staffdetails->staff_id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
    </body>
</html>