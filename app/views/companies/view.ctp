<div class="view">
<h2> view smth. </h2>
	<dl>
		<dt>Id</dt>
		<dd><?php echo $company['Company']['id'];?>
		</dd>
		<dt>Name</dt>
		<dd><?php echo $company['Company']['name']?>
		</dd>
		<dt>Invoice</dt>
		<dd><?php foreach ($company['Invoice'] as $po):?>
				<?php echo $po['total'];?> ,
    			<?php endforeach; ?>
		</dd>
		<dt>Product</dt>
		<dd><?php foreach ($company['Product'] as $py):?>
				<?php echo $py['name'];?> ,
    			<?php endforeach; ?>
		</dd>
	</dl>
</div>