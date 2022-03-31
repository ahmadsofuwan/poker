<!DOCTYPE html>
<html lang="en">

<head>
    <?php if (isset($dataCompany)) { ?>
        <link rel="icon" href="<?php echo base_url('uploads/' . $dataCompany[0]['logo']) ?>">
        <?php
        foreach ($head as $headKey => $headValue) {
            echo $headValue['html'];
        }
        ?>
    <?php } ?>
    <?php if (isset($situs['head'])) {
        echo $situs['head'];
    } ?>
    <style>
        html {
            scroll-behavior: smooth !important;
        }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title ?></title>
    <!-- select 2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/sb_admin2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/sb_admin2/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?= base_url('asset/admin/'); ?>css/base.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="<?= base_url('asset/sb_admin2/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="<?= base_url('asset/sb_admin2/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/a600946ff2.js"></script>

</head>

<body id="page-top" style="background-color: #020024;">

    <?php if (isset($dataCompany)) { ?>
        <nav class="navbar navbar-expand-lg text-white navbar-light" style="background: linear-gradient(90deg, rgba(36,0,3,1) 0%, rgba(5,17,78,1) 0%, rgba(36,0,3,1) 100%);">
            <a class="navbar-brand" href="<?php echo base_url() ?>"><img src="<?php echo base_url('uploads/' . $dataCompany[0]['logo']) ?>" alt="Logo" style="width: 200px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto text-white">
                    <li class="nav-item active">
                        <!-- <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a> -->
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0 mr-3">
                    <a href="#privacy" class="text-white scroll">Kebijakan Privasi</a>
                    <a href="#about" class="ml-2 text-white scroll">Tentang Kami</a>
                </div>
            </div>
        </nav>
    <?php } ?>