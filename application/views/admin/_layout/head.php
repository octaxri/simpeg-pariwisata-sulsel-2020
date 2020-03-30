<!doctype html>
<html lang="en">

<head>
	<?php $modul = $this->uri->segment(2); $method = $this->uri->segment(3); ?>
	<title>SIMPEG PARIWISATA SULSEL</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?=assets_url()?>vendor/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/linearicons/style.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/datatables/css-main/jquery.dataTables.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/datatables/css-bootstrap/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/datatables-tabletools/css/dataTables.tableTools.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/datatables-fixedColumns/css/fixedColumns.dataTables.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/sweetalert/sweetalert.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/bootstrap-multiselect/bootstrap-multiselect.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/dropify/css/dropify.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/parsleyjs/css/parsley.css">
	<link rel="stylesheet" href="<?=assets_url()?>vendor/jstree/themes/default/style.css">
	<?= ($modul == 'masterdata') ? '<link rel="stylesheet" href="'.assets_url().'vendor/x-editable/bootstrap3-editable/css/bootstrap-editable.css">' : '' ?>
	<?= ($modul == 'masterdata') ? '<link rel="stylesheet" href="'.assets_url().'vendor/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js-bootstrap.css">' : '' ?>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=assets_url()?>css/main.min.css">
	<link rel="stylesheet" href="<?=assets_url()?>css/style.css">
	<link rel="stylesheet" href="<?=assets_url()?>css/skins/sidebar-nav-darkblue.css">
	<link rel="stylesheet" href="<?=assets_url()?>css/skins/navbar3.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?=assets_url()?>img/pemprov.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=assets_url()?>img/pemprov.png">
	<script src="<?=assets_url()?>vendor/jquery/jquery.min.js"></script>
	<script src="<?=assets_url()?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=assets_url()?>vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=assets_url()?>vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="<?=assets_url()?>vendor/chartist/js/chartist.min.js"></script>
	<script src="<?=assets_url()?>vendor/chart-js/Chart.min.js""></script>
	<script src="<?=assets_url()?>vendor/select2/js/select2.full.js"></script>
	<script src="<?=assets_url()?>vendor/select2cascade/select2-cascade.js"></script>
	<?= ($modul == 'masterdata') ? '<script src="'.assets_url().'vendor/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script> ' : ''; ?>

	<script src="<?=assets_url()?>vendor/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
	<script src="<?=assets_url()?>vendor/hideshowpassword/hideShowPassword.min.js"></script>
	<script src="<?=assets_url()?>vendor/dropify/js/dropify.min.js"></script>
	<script src="<?=assets_url()?>vendor/parsleyjs/js/parsley.min.js"></script>
	<?= ($modul == 'masterdata') ? '<script src="'.assets_url().'vendor/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>' : '' ?>
	<?= ($modul == 'masterdata') ? '<script src="'.assets_url().'vendor/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>' : '' ?>
	<?= ($modul == 'masterdata') ? '<script src="'.assets_url().'vendor/x-editable/inputs-ext/address/address.js"></script>' : '' ?>
	<script src="<?=assets_url()?>vendor/moment/min/moment.min.js"></script>
	<script src="<?=assets_url()?>scripts/klorofilpro-common.min.js"></script>

	<style>
		th,tr,td {
			white-space: nowrap !important;
		}
		.white-spaces {
			white-space: nowrap;
		}

        .benar td{
            white-space : normal !important;
        }
	</style>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
