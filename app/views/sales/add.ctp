<div class="sales form">
<?php echo $this->Form->create('Sale');?>
	<fieldset>
 		<legend><?php __('Add Sale'); ?></legend>
	<?php
		echo $this->Form->input('product_id' , array('type'=>'select', 'options'=>$product));
		echo $this->Form->input('invoice_id', array('type'=>'select', 'options'=>$invoice));
		echo $this->Form->input('price');
		echo $this->Form->input('unit_product');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sales', true), array('action' => 'index'));?></li>
	</ul>
</div>