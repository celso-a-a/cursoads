<?= $this->extend('Manager/Layout/main.php') ?>
<!--envio para template principal os arquivos ccs e styles dessa view -->
<?= $this->section('title') ?>
<?php echo $title ?? ''; ?>
<?= $this->endSection() ?>
<!--envio para template principal o conteudo de stilo da pagina -->
<?= $this->section('styles') ?>
<?= $this->endSection() ?>
<!--envio para template principal o conteudo dessa view -->
<?= $this->section('content') ?>
<div class="container-fluid">
    <h1><?php echo $title ?? ''; ?></h1>
</div>
<?= $this->endSection() ?>

<!--envio para template principal os arquivos scripts dessa view -->
<?= $this->section('scripts') ?>
<?= $this->endSection() ?>