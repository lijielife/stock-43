<div class="view">
<h2> view smth. </h2>
	<dl>
		<dt>Id</dt>
		<dd><?php echo $product['Product']['id'];?>
		</dd>
		<dt>Name</dt>
		<dd><?php echo $product['Product']['name']?>
		</dd>
		<dt>Company</dt>
		<dd><?php foreach ($product['Company'] as $pw):?>
				<?php echo $pw['name'];?> ,
    			<?php endforeach; ?>
		</dd>
		<dt>Invoice</dt>
		<dd><?php foreach ($product['Invoice'] as $py):?>
				<?php echo $py['total'];?> ,
    			<?php endforeach; ?>
		</dd>
	</dl>
</div>
