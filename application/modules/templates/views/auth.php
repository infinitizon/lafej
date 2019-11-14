<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Online store for your stationaries and plastic bags">
	<meta name="keywords" content="Lafej,Lafej Store,Online store,free deliverystationaries,pencils,crayons,white marker board,pen,erasers,plastics,plastic bags">
	<meta name="author" content="infinitizon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo asset_url(); ?>bootstrap/3.3.7/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo asset_url(); ?>bootstrap/3.3.7/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/custom.css" />
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/login.css" />
	<link rel="shortcut icon" href="<?php echo asset_url(); ?>images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo asset_url(); ?>images/favicon.ico" type="image/x-icon">

	<title>Lafej Admin :: <?php echo $title; ?></title>
</head>
<body>
<div class="row">

<?php

$this->load->view($module.'/'.$view_file);
?>

</div>

<script src="<?php echo asset_url(); ?>js/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo asset_url(); ?>bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
