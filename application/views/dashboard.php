<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>

        <h1>Selamat Datang <?php echo $this->session->userdata('NoKP') ?></h1>
        <a href="<?php echo site_url('dashboard/logout') ?>">Logout</a>
        <?php $this->load->view('/menu');?>

       
    
        <h2>Paparan Senarai surat</h2>

    </body>
