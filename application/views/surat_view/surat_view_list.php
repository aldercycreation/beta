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
                <h2 style="margin-top:0px">Surat_view List</h2>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <?php echo anchor(site_url('surat_view/create'), 'Create', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Siid</th>
		    <th>Tarikh</th>
		    <th>Minit</th>
		    <th>Catatan</th>
		    <th>Penghantar</th>
		    <th>Penerima</th>
		    <th>Status</th>
		    <th>Sid</th>
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
		    <th>Imbas</th>
		    <th>Pendaftar</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($surat_view_data as $surat_view)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $surat_view->siid ?></td>
		    <td><?php echo $surat_view->Tarikh ?></td>
		    <td><?php echo $surat_view->Minit ?></td>
		    <td><?php echo $surat_view->Catatan ?></td>
		    <td><?php echo $surat_view->Penghantar ?></td>
		    <td><?php echo $surat_view->Penerima ?></td>
		    <td><?php echo $surat_view->status ?></td>
		    <td><?php echo $surat_view->sid ?></td>
		    <td><?php echo $surat_view->tarikhTerima ?></td>
		    <td><?php echo $surat_view->Jenis ?></td>
		    <td><?php echo $surat_view->awam ?></td>
		    <td><?php echo $surat_view->agensi ?></td>
		    <td><?php echo $surat_view->bahagian ?></td>
		    <td><?php echo $surat_view->individu ?></td>
		    <td><?php echo $surat_view->jawatan ?></td>
		    <td><?php echo $surat_view->kategori ?></td>
		    <td><?php echo $surat_view->rujukanSurat ?></td>
		    <td><?php echo $surat_view->RingkasanKandungan ?></td>
		    <td><?php echo $surat_view->tarikhSurat ?></td>
		    <td><?php echo $surat_view->Imbas ?></td>
		    <td><?php echo $surat_view->pendaftar ?></td>
		    <td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('surat_view/read/'.$surat_view->),'Read'); 
			echo ' | '; 
			echo anchor(site_url('surat_view/update/'.$surat_view->),'Update'); 
			echo ' | '; 
			echo anchor(site_url('surat_view/delete/'.$surat_view->),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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