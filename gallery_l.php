<?php
require_once('connect.php');
include('gallery_l_biz.php');
?>
<html>
<head>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<form enctype="multipart/form-data" action="uncheck.php"  method="post" >
	<?php obrazki() ?>
	<input type="submit" value="Usuń zaznaczone"/>
</form>
<a href="index.php">Wróć na stronę główną</a>
</body>
</html>