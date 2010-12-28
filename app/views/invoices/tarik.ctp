<h2> view all invoices </h2>

<?php
				
	for ($a=0; $a<count($invoices); $a++) {
			$invoice = $invoices;
			echo $invoice[$a]['Invoice']['date']."<br>";
			echo $invoice[$a]['Invoice']['description']."<br>";
			echo $invoice[$a]['Invoice']['total']."<br>";	
} 

?>