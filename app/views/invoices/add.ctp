<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
 		<legend><?php __('Add Invoice'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('description');
		echo $this->Form->input('Product.id', array('type'=>'select','multiple' => 'checkbox', 'options'=>$prd));
		echo $this->Form->input('company_id', array('type'=>'select',  'options'=>$company));
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index'));?></li>
	</ul>
</div>
