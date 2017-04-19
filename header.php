<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<title><?php
		if ( is_home() ) {
			bloginfo( 'name' );
		} else {
			wp_title( '' );
		}
	?></title><?php

		wp_head();

	?>

</head>
<body <?php body_class(); ?>>

<div id="site-wrap">
