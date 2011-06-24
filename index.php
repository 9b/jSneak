<?php 
include_once '10/functions.php';

$token = $_GET['token'];

$t = generate_token();
printf("%d", $t);

if ($token == $t) {
	$dada = get_payload();
	echo "<html><body> Hello World $dada</body></html>";
} else {
	echo "<html><body> Hello World</body></html>";
}
?>

