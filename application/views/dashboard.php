<!DOCTYPE html>
<html>
    <head>
        <title>Dashboard</title>
    </head>
    <body>

        <h1>Selamat Datang <?= $this->session->userdata('NoKP') ?></h1>
        <a href="<?= site_url('dashboard/logout') ?>">Logout</a>
        <?php $this->load->view('/menu');?>

       
    
        <h2>Paparan Senarai surat</h2>

    </body>
