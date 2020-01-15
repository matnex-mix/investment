<?php

	if( !empty($_GET['f']) ) {
		$get = 'templates/'.$_GET['f'].'.php';
		echo "
<!DOCTYPE html>
<html style='overflow-x: hidden'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<link rel='icon' href='http://localhost/brandin/favicon.png'>

		<link rel='stylesheet' href='minify/bootstrap.min.css' type='text/css'>
		<link rel='stylesheet' href='minify/fontawesome5/css/all.min.css' type='text/css'>
		<link rel='stylesheet' href='css/style.css' type='text/css'>

		<script src='http://localhost/git-repo/axe/v2.0.0/js/axe.js'></script>
		<script src='http://localhost/git-repo/axe/v2.0.0/js/axe-easy.js'></script>
		<script src='http://localhost/git-repo/axe/v2.0.0/js/axe-html.js'></script>
		<script src='minify/jquery.min.js'></script>
		<script src='minify/bootstrap.bundle.min.js'></script>
		<script src='minify/chart.bundle.min.js'></script>

		<title>BrandIn New Template</title>
		<style>
			".file_get_contents('styles.css')."
		</style>
	</head>
	<body>";
		include $get;
	echo "</body>
</html>
		";
	}
