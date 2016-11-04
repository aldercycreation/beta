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
        <h2 style="margin-top:0px">Surat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="date">TarikhTerima <?php echo form_error('tarikhTerima') ?></label>
            <input type="text" class="form-control" name="tarikhTerima" id="tarikhTerima" placeholder="TarikhTerima" value="<?php echo $tarikhTerima; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Jenis <?php echo form_error('Jenis') ?></label>
            <input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" value="<?php echo $Jenis; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Awam <?php echo form_error('awam') ?></label>
            <input type="text" class="form-control" name="awam" id="awam" placeholder="Awam" value="<?php echo $awam; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Agensi <?php echo form_error('agensi') ?></label>
            <input type="text" class="form-control" name="agensi" id="agensi" placeholder="Agensi" value="<?php echo $agensi; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bahagian <?php echo form_error('bahagian') ?></label>
            <input type="text" class="form-control" name="bahagian" id="bahagian" placeholder="Bahagian" value="<?php echo $bahagian; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Individu <?php echo form_error('individu') ?></label>
            <input type="text" class="form-control" name="individu" id="individu" placeholder="Individu" value="<?php echo $individu; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jawatan <?php echo form_error('jawatan') ?></label>
            <input type="text" class="form-control" name="jawatan" id="jawatan" placeholder="Jawatan" value="<?php echo $jawatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('kategori') ?></label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="<?php echo $kategori; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">RujukanSurat <?php echo form_error('rujukanSurat') ?></label>
            <input type="text" class="form-control" name="rujukanSurat" id="rujukanSurat" placeholder="RujukanSurat" value="<?php echo $rujukanSurat; ?>" />
        </div>
	    <div class="form-group">
            <label for="mediumtext">RingkasanKandungan <?php echo form_error('RingkasanKandungan') ?></label>
            <input type="text" class="form-control" name="RingkasanKandungan" id="RingkasanKandungan" placeholder="RingkasanKandungan" value="<?php echo $RingkasanKandungan; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TarikhSurat <?php echo form_error('tarikhSurat') ?></label>
            <input type="text" class="form-control" name="tarikhSurat" id="tarikhSurat" placeholder="TarikhSurat" value="<?php echo $tarikhSurat; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="mediumtext">Imbas <?php echo form_error('Imbas') ?></label>
            <input type="text" class="form-control" name="Imbas" id="Imbas" placeholder="Imbas" value="<?php echo $Imbas; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pendaftar <?php echo form_error('pendaftar') ?></label>
            <input type="text" class="form-control" name="pendaftar" id="pendaftar" placeholder="Pendaftar" value="<?php echo $pendaftar; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">TarikhKemasukkan <?php echo form_error('tarikhKemasukkan') ?></label>
            <input type="text" class="form-control" name="tarikhKemasukkan" id="tarikhKemasukkan" placeholder="TarikhKemasukkan" value="<?php echo $tarikhKemasukkan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">TindakanTotal <?php echo form_error('TindakanTotal') ?></label>
            <input type="text" class="form-control" name="TindakanTotal" id="TindakanTotal" placeholder="TindakanTotal" value="<?php echo $TindakanTotal; ?>" />
        </div>
	    <input type="hidden" name="sid" value="<?php echo $sid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>