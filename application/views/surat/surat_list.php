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
                <h2 style="margin-top:0px">Surat List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('surat/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>TarikhTerima</th>
		    <th>Jenis</th>
		    <th>Awam</th>
		    <th>Agensi</th>
		    <th>Bahagian</th>
		    <th>Individu</th>
		    <th>Jawatan</th>
		    <th>Kategori</th>
		    <th>RujukanSurat</th>
		    <th>RingkasanKandungan</th>
		    <th>TarikhSurat</th>
		    <th>Status</th>
		    <th>Imbas</th>
		    <th>Pendaftar</th>
		    <th>TarikhKemasukkan</th>
		    <th>TindakanTotal</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($surat_data as $surat)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $surat->tarikhTerima ?></td>
		    <td><?php echo $surat->Jenis ?></td>
		    <td><?php echo $surat->awam ?></td>
		    <td><?php echo $surat->agensi ?></td>
		    <td><?php echo $surat->bahagian ?></td>
		    <td><?php echo $surat->individu ?></td>
		    <td><?php echo $surat->jawatan ?></td>
		    <td><?php echo $surat->kategori ?></td>
		    <td><?php echo $surat->rujukanSurat ?></td>
		    <td><?php echo $surat->RingkasanKandungan ?></td>
		    <td><?php echo $surat->tarikhSurat ?></td>
		    <td><?php echo $surat->status ?></td>
		    <td><?php echo $surat->Imbas ?></td>
		    <td><?php echo $surat->pendaftar ?></td>
		    <td><?php echo $surat->tarikhKemasukkan ?></td>
		    <td><?php echo $surat->TindakanTotal ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('surat/read/'.$surat->sid),'Read'); 
			echo ' | '; 
			echo anchor(site_url('surat/update/'.$surat->sid),'Update'); 
			echo ' | '; 
			echo anchor(site_url('surat/delete/'.$surat->sid),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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