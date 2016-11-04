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
        <h2 style="margin-top:0px">Surat_view <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Siid <?php echo form_error('siid') ?></label>
            <input type="text" class="form-control" name="siid" id="siid" placeholder="Siid" value="<?php echo $siid; ?>" />
        </div>
	    <div class="form-group">
            <label for="datetime">Tarikh <?php echo form_error('Tarikh') ?></label>
            <input type="text" class="form-control" name="Tarikh" id="Tarikh" placeholder="Tarikh" value="<?php echo $Tarikh; ?>" />
        </div>
	    <div class="form-group">
            <label for="Minit">Minit <?php echo form_error('Minit') ?></label>
            <textarea class="form-control" rows="3" name="Minit" id="Minit" placeholder="Minit"><?php echo $Minit; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="Catatan">Catatan <?php echo form_error('Catatan') ?></label>
            <textarea class="form-control" rows="3" name="Catatan" id="Catatan" placeholder="Catatan"><?php echo $Catatan; ?></textarea>
        </div>
	    <div class="form-group">
            <label for="int">Penghantar <?php echo form_error('Penghantar') ?></label>
            <input type="text" class="form-control" name="Penghantar" id="Penghantar" placeholder="Penghantar" value="<?php echo $Penghantar; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Penerima <?php echo form_error('Penerima') ?></label>
            <input type="text" class="form-control" name="Penerima" id="Penerima" placeholder="Penerima" value="<?php echo $Penerima; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Status <?php echo form_error('status') ?></label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Sid <?php echo form_error('sid') ?></label>
            <input type="text" class="form-control" name="sid" id="sid" placeholder="Sid" value="<?php echo $sid; ?>" />
        </div>
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
            <label for="mediumtext">Imbas <?php echo form_error('Imbas') ?></label>
            <input type="text" class="form-control" name="Imbas" id="Imbas" placeholder="Imbas" value="<?php echo $Imbas; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">Pendaftar <?php echo form_error('pendaftar') ?></label>
            <input type="text" class="form-control" name="pendaftar" id="pendaftar" placeholder="Pendaftar" value="<?php echo $pendaftar; ?>" />
        </div>
	    <input type="hidden" name="" value="<?php echo $; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat_view') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>