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
        
        <link href="<?php echo base_url('assets/bootstrap/css/bootstrap-combined.min.css') ?>"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/bootstrap/css/bootstrap-datetimepicker.min.css')?>"/>
   <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
   
   <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    </head>
    <body>
        <?php $this->load->view('/menu');?>

        <?php 
        $today=date("d/m/Y");
        echo "Hari ini adalah: " .$today?>
        <h2 style="margin-top:0px">Surat <?php echo $button ?></h2>
           
        <form action="<?php echo $action; ?>" method="post">
	    
            <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Tarikh Kemasukkan
       <span class="asteriskField">
       </span>
      </label>      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="tarikhKemasukkan" class = "date" placeholder="DD/MM/YYYY" type="text"/>
       
       </div>
        * <?php echo form_error('tarikhKemasukkan') ?>

      </div>
      </div>
            
        
      <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Tarikh Surat
       <span class="asteriskField">
       </span>
      </label>      
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="tarikhSurat" class = "date" placeholder="DD/MM/YYYY" type="text"/>
       
       </div>
        * <?php echo form_error('tarikhSurat') ?>

      </div>
      </div>
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Tarikh Terima
       <span class="asteriskField">
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control form-control" id="date" name="tarikhTerima" placeholder="DD/MM/YYYY" type="text"/>
       </div>
          * <?php echo form_error('tarikhTerima') ?>

      </div>
     </div>      
            
      
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
        

<script type="text/javascript"
     src="<?php echo base_url('assets/bootstrap/js/jquery.min.js')?>"/>
    </script> 
    <script type="text/javascript"
     src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"/>
    </script>
    <script type="text/javascript"
     src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.min.js')?>"/>
    </script>
    <script type="text/javascript"
     src="<?php echo base_url('assets/bootstrap/js/bootstrap-datetimepicker.pt-BR.js')?>"/>
    </script>
    <script type="text/javascript">
      $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy ',
       });
    </script>
    
    
    <!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[id="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'dd/mm/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

    
    
    </body>
</html>