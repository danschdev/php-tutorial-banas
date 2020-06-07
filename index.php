<?php
$f_name = "Daniel";
$l_name = "Schnelle";
$age = 35;
$height = 1.84;
$can_vote = true;
$address = array(
	'street' => 'Oertzweg 10',
	'city' => 'Hamburg'
);
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
	<form action="index.php" method="get">
		<label>Your state : </label>
		<input type="text" name="state" /><br />
		<label>Number 1 : </label>
		<input type="text" name="num-1" /><br />
		<label>Number 2 : </label>
		<input type="text" name="num-2" /><br />
		<input type="submit" value="Submit" />
	</form>
	<?php
	if (isset($_GET) && array_key_exists('state', $_GET)) {
		$state = $_GET['state'];
		if (isset($state) && !empty($state)) {
			echo 'You live in ' . $state . '<br/>';
		}
		if (count($_GET) >= 3) {
			$num_1 = $_GET['num-1'];
			$num_2 = $_GET['num-2'];
			echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br/>";
			echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br/>";
			echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br/>";
			echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br/>";
			echo "$num_1 / $num_2 ~ " . intdiv($num_1, $num_2) . "<br/>";
			echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br/>";
			echo "Increment $num_1 = "; {
				$num_1++;
				echo $num_1 . "<br/>";
			}
		}
	}
	?>
</body>

</html>