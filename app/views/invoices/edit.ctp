<div class="invoices form">
<?php echo $this->Form->create('Invoice');?>
	<fieldset>
 		<legend><?php __('Edit Invoice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('description');
		echo $this->Form->input('company_id');
		echo $this->Form->input('total');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Invoice.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Invoice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index'));?></li>
	</ul>
</div>