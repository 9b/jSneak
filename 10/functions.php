<?php 
function get_payload() {
	$file = "10/drop.inc";
	if(file_exists($file)) {
		$contents = file_get_contents($file);	
		return $contents;
	}
	
	return "error";
}

function get_private_key() {
	$file = "10/key.inc";
	if(file_exists($file)) {
		$contents = file_get_contents($file);	
		return (int) $contents;
	}
	
	return 0;
}

function generate_token() {
	//$format = '(%1$2d = %1$04b) = (%2$2d = %2$04b)' . ' %3$s (%4$2d = %4$04b)' . "\n";
	$t = time();
	$mask = 0xFFFFF00;
	$priv_key = get_private_key();
	
	$token = ($t & $mask) ^ $priv_key;
	
	return $token;
}
?>
