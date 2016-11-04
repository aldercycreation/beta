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
                <h2 style="margin-top:0px">Surat_individu List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('surat_individu/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Tarikh</th>
		    <th>Sid</th>
		    <th>Penghantar</th>
		    <th>Minit</th>
		    <th>Penerima</th>
		    <th>Catatan</th>
		    <th>Status</th>
		    <th>Email Status</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($surat_individu_data as $surat_individu)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $surat_individu->Tarikh ?></td>
		    <td><?php echo $surat_individu->sid ?></td>
		    <td><?php echo $surat_individu->Penghantar ?></td>
		    <td><?php echo $surat_individu->Minit ?></td>
		    <td><?php echo $surat_individu->Penerima ?></td>
		    <td><?php echo $surat_individu->Catatan ?></td>
		    <td><?php echo $surat_individu->Status ?></td>
		    <td><?php echo $surat_individu->Email_Status ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('surat_individu/read/'.$surat_individu->siid),'Read'); 
			echo ' | '; 
			echo anchor(site_url('surat_individu/update/'.$surat_individu->siid),'Update'); 
			echo ' | '; 
			echo anchor(site_url('surat_individu/delete/'.$surat_individu->siid),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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