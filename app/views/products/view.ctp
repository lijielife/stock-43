<div class="product view">
<h2> product view smth. </h2>
	<dl>
		<dt>Id</dt> <dd><?php echo $product['Product']['id'];?></dd>
		<dt>Name</dt> <dd><?php echo $product['Product']['name']?></dd>
		<dt>Company</dt> <dd><?php foreach ($product['Company'] as $pw):
															   echo $pw['name']. "," ;
															   endforeach; ?>
		</dd>
		<dt>Invoice</dt> <dd><?php foreach ($product['Invoice'] as $py):
														  echo $py['total']. "," ;
														  endforeach; ?>
		</dd>
	</dl>
</div>