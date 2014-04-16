<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		<?php
		if (! isset($_GET['page'])) {
			echo "This is Index";
		} else {
			echo ucwords($_GET['page']);
		}
		?>
	</title>
</head>
<body>
	<header>
		This Is Header
	</header>
	<div>
		<?php
			if (! isset($_GET['page'])) { echo 'This Index'; }
			elseif($_GET['page'] == 'news') { require 'news.php'; }
			elseif($_GET['page'] == 'contact') { require 'contact.php'; }
		?>
	</div>
	<footer>
		This Is Footer
	</footer>
</body>
</html>