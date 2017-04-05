<?php
	print_r("Printing arp scan output\n");
	$out = shell_exec('arp -a');
	print_r($out);
	
	
	$out = shell_exec('ping -f 127.0.0.1');
	print_r($out);
	
	
	
?>
