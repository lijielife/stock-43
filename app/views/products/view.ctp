<div class="product view">
<h2> product view smth. </h2>
	<dl>
		<dt>Id</dt>
			<dd><?php echo $product['Product']['id'];?></dd>
		<dt>Name</dt>
			<dd><?php echo $product['Product']['name']?></dd>
		<dt>Company</dt>
			<dd><?php foreach ($product['Company'] as $pw): ?>
				<?php echo $pw['name']. "," ;?>
			<?php endforeach; ?></dd>
		<dt>Invoice prices</dt>
			<dd><?php foreach ($product['Invoice'] as $py): ?>
				<?php echo $py['total']. "," ; ?>
			 <?php endforeach; ?></dd>
		<dt>stock info</dt>
			<dd><?php echo $summ; ?></dd>	 
	</dl>
</div>