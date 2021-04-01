<?php
	require_once './languages/selectedLang.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Internationalisation</title>
	<meta charset="utf-8">
	<style type="text/css">
		ul li {
			display: inline;
		}
		.header{
			text-align: center;
		}
	</style>
</head>
<body>

	<ul style="ul:inline;">
		<li><a href="index.php?lang=fr"><img src="./languages/images/fr.png" width="20" height="20"></a></li>
		<li><a href="index.php?lang=en"><img src="./languages/images/en.png" width="20" height="20"></a></li>
		<li><a href="index.php?lang=esp"><img src="./languages/images/esp.png" width="20" height="20"></a></li>
	</ul>

	<br><br><br>

	<div class="header">
		<h1> <?php echo @$header['h1']; ?> </h1>
		<p>
			<?php echo @$header['p']; ?>
		</p>
	</div>

</body>
</html>