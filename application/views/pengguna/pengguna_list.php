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
                <h2 style="margin-top:0px">Pengguna List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('pengguna/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>NoKP</th>
		    <th>Password</th>
		    <th>Email</th>
		    <th>Nama</th>
		    <th>Bahagian</th>
		    <th>Jawatan</th>
		    <th>Level</th>
		    <th>Iid</th>
		    <th>Status</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($pengguna_data as $pengguna)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $pengguna->NoKP ?></td>
		    <td><?php echo $pengguna->Password ?></td>
		    <td><?php echo $pengguna->Email ?></td>
		    <td><?php echo $pengguna->Nama ?></td>
		    <td><?php echo $pengguna->Bahagian ?></td>
		    <td><?php echo $pengguna->Jawatan ?></td>
		    <td><?php echo $pengguna->Level ?></td>
		    <td><?php echo $pengguna->iid ?></td>
		    <td><?php echo $pengguna->Status ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('pengguna/read/'.$pengguna->pid),'Read'); 
			echo ' | '; 
			echo anchor(site_url('pengguna/update/'.$pengguna->pid),'Update'); 
			echo ' | '; 
			echo anchor(site_url('pengguna/delete/'.$pengguna->pid),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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