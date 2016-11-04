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
        <h2 style="margin-top:0px">Surat Read</h2>
        <table class="table">
	    <tr><td>TarikhTerima</td><td><?php echo $tarikhTerima; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $Jenis; ?></td></tr>
	    <tr><td>Awam</td><td><?php echo $awam; ?></td></tr>
	    <tr><td>Agensi</td><td><?php echo $agensi; ?></td></tr>
	    <tr><td>Bahagian</td><td><?php echo $bahagian; ?></td></tr>
	    <tr><td>Individu</td><td><?php echo $individu; ?></td></tr>
	    <tr><td>Jawatan</td><td><?php echo $jawatan; ?></td></tr>
	    <tr><td>Kategori</td><td><?php echo $kategori; ?></td></tr>
	    <tr><td>RujukanSurat</td><td><?php echo $rujukanSurat; ?></td></tr>
	    <tr><td>RingkasanKandungan</td><td><?php echo $RingkasanKandungan; ?></td></tr>
	    <tr><td>TarikhSurat</td><td><?php echo $tarikhSurat; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Imbas</td><td><?php echo $Imbas; ?></td></tr>
	    <tr><td>Pendaftar</td><td><?php echo $pendaftar; ?></td></tr>
	    <tr><td>TarikhKemasukkan</td><td><?php echo $tarikhKemasukkan; ?></td></tr>
	    <tr><td>TindakanTotal</td><td><?php echo $TindakanTotal; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('surat') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>