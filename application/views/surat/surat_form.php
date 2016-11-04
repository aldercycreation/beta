<!doctype html>
<html>
    <head>
        <title>Tambah Rekod</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
   
    </head>
    <body>
        <?php 
        $today=date("d/m/Y");
        echo "Hari ini : " .$today?>
        <h2 style="margin-top:0px">Surat <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    
            <div class="form-group">
            <label for="date">Tarikh <?php echo form_error('tarikhKemasukkan') ?></label>
            <input type="text" name="tarikhKemasukkan" id="tarikhKemasukkan"  value="<?php echo $today; ?>" readonly />
        </div>
            
            <div class="form-group">
            <label for="date">TarikhSurat <?php echo form_error('tarikhSurat') ?></label>
            <input type="text" class="form-control" name="tarikhSurat" id="tarikhSurat" placeholder="TarikhSurat" value="<?php echo $tarikhSurat; ?>" />
        </div>
            
            <div class="form-group">
            <label for="date">Tarikh Terima <?php echo form_error('tarikhTerima') ?></label>
            <input type="text" class="form-control" name="tarikhTerima" id="tarikhTerima" placeholder="TarikhTerima" value="<?php echo $tarikhTerima; ?>" />
           
            <div class="form-group">
            <label for="varchar">Rujukan Surat <?php echo form_error('rujukanSurat') ?></label>
            <input type="text" class="form-control" name="rujukanSurat" id="rujukanSurat" placeholder="RujukanSurat" value="<?php echo $rujukanSurat; ?>" />
        </div>
            
            <div class="form-group">
            <label for="mediumtext">Ringkasan Kandungan <?php echo form_error('RingkasanKandungan') ?></label>
            <input type="text" class="form-control" name="RingkasanKandungan" id="RingkasanKandungan" placeholder="RingkasanKandungan" value="<?php echo $RingkasanKandungan; ?>" />
        </div>
            
            </div>
	    <div class="form-group">
            <label for="int">Jenis <?php echo form_error('Jenis') ?></label>
            <input type="text" class="form-control" name="Jenis" id="Jenis" placeholder="Jenis" value="<?php echo $Jenis; ?>" />
        </div>
	    <!--<div class="form-group">
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
     -->
	    <div class="form-group">
            <label for="varchar">Kategori <?php echo form_error('kategori') ?></label>
            <input type="text" class="form-control" name="kategori" id="kategori" placeholder="Kategori" value="<?php echo $kategori; ?>" />
        </div>
	    
	    
	   
	    <div class="form-group">
            <label for="mediumtext">Imbas <?php echo form_error('Imbas') ?></label>
            <input type="text" class="form-control" name="Imbas" id="Imbas" placeholder="Imbas" value="<?php echo $Imbas; ?>" />
        </div>
	
     <!--
        <div class="form-group">
            <label for="int">Pendaftar <?php echo form_error('pendaftar') ?></label>
            <input type="text" class="form-control" name="pendaftar" id="pendaftar" placeholder="Pendaftar" value="<?php echo $pendaftar; ?>" />
        </div>
     -->
	    
	    
	    <input type="hidden" name="sid" value="<?php echo $sid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('surat') ?>" class="btn btn-default">Batal</a>
	</form>
        

    </body>
</html>