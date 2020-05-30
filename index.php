<?php
$f_name = "Daniel";
$l_name = "Schnelle";
$age = 35;
$height = 1.84;
$can_vote = true;
$address = array('street'=>'Oertzweg 10',
'city'=>'Hamburg');
$state = NULL;
define('PI', 3.14159)
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>PHP Tutorial</title>
</head>

<body>
	<p>Name: <?php echo $f_name . ' ' . $l_name; ?></p>
</body>

</html>