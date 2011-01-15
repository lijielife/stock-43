<?php 
	$tplm = 0;
	foreach($book as $i) 
	$tplm += $i['Invoice']['total'];
	echo $tplm;	
?>