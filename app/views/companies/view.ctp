<div class="company view">
<h2> company view smth. </h2>
	<dl>
		<dt>Id</dt> <dd><?php echo $company['Company']['id'];?></dd>
		<dt>Name</dt> <dd><?php echo $company['Company']['name']?></dd>
		<dt>Invoice total</dt> <dd> <?php echo $sum; ?> </dd>
		<dt>Product</dt> <dd><?php foreach ($company['Product'] as $py):
															echo $py['name']. "," ;
															endforeach; ?> </dd>
	</dl>
</div>
