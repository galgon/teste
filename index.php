<?php
/*
   -------------------------------------------------------------------
   quick script to grab a random BOFH excuse.

    - Peter Lowe // pgl@yoyo.org // http://pgl.yoyo.org/bofh/

   credit to Jeff Ballard <ballard@NOSPAMcs.wisc.edu> for the original
   bofh excuse server: http://www.cs.wisc.edu/~ballard/bofh/
   -------------------------------------------------------------------
*/

$excusefile = 'excuses';

function excuse($excusefile)
{
	if (!$excuses = @file($excusefile))
		return "couldn't read excuse file '$excusefile'";
	return $excuses[mt_rand(0, count($excuses)-1)];
}
?>
<html>
	<head>
		<title>
			Error
		</title>
		<meta info="bleh">
		With a pocket full of shells
	</head>

	<body>
		<h1>Error 4<?=mt_rand(18,99)?></h1>
		<p><?=excuse($excusefile)?></p>
		<hr>
		<address><?=apache_get_version()?> Server at <?=$_SERVER['SERVER_NAME']?> Port <?=$_SERVER['SERVER_PORT']?></address>
	</body>
</html>

<!-- fim de arquivo -->

<?php
// vim:noet:tabstop=4:shiftwidth=4:cinoptions=:cindent
?>
