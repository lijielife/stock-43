<div class="invoice view">
<h2> Invoice View </h2>
	<dl>
		<dt>Id</dt> 
			<dd><?php echo $invoice['Invoice']['id']; ?></dd>
		<dt>Date</dt> 
			<dd><?php echo $invoice['Invoice']['date']; ?></dd>
		<dt>Description</dt> 
			<dd><?php echo $invoice['Invoice']['description']; ?></dd>
		<dt>Company</dt> 
			<dd><?php echo $invoice['Company']['name']; ?></dd>
		<dt>Product</dt> 
				<dd><?php foreach ($invoice['Product'] as $p): ?>
					<?php echo $p['name'] . "<br>" ; ?>
			     <?php endforeach;?></dd>
		<dt>Total</dt> 
			<dd><?php echo $invoice['Invoice']['total'];?> </dd>
	</dl>
</div>
