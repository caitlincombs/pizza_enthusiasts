<!DOCTYPE html>

<html long="en">
	<head>
		<title>Deployment Script</title>
	</head>
	<body>
	<p>Deploy Script</p>
		<pre>

<?php
$output = shell_exec("cd ..;git pull 2>&1");
echo $output;
?>

		</pre>
	</body>
</html>