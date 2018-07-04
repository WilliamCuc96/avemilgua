<?php 
/*
 * 
 * File Name: sampleposteddata.php
 * 	This page lists the data posted by a form.
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 * 		Jim Michaels (jmichae3@yahoo.com)
 */
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Datos Posteados</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="noindex, nofollow">
		<link href="../sample.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<h1>Datos Posteados</h1>
		Esta página muestra los datos posteados desde un formulario.
		<hr>
		<table width="100%" border="1" cellspacing="0" bordercolor="#999999">
			<tr style="FONT-WEIGHT: bold; COLOR: #dddddd; BACKGROUND-COLOR: #999999">
				<td nowrap>Nombre de variable&nbsp;&nbsp;</td>
				<td>Valor</td>
			</tr>
<?php

if ( isset( $_POST ) )
   $postArray = &$_POST ;			// 4.1.0 or later, use $_POST
else
   $postArray = &$HTTP_POST_VARS ;	// prior to 4.1.0, use HTTP_POST_VARS

foreach ( $postArray as $sForm => $value )
{
	$postedValue = htmlspecialchars( stripslashes( $value ) ) ;

?>
			<tr>
				<td valign="top" nowrap><b><?=$sForm?></b></td>
				<td width="100%"><?=$postedValue?></td>
			</tr>
<?php
}
?>
		</table>
	</body>
</html>
