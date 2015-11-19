<div class="memorials form">
<?php echo $this->Form->create('Memorial'); ?>
	<fieldset>
		<legend><?php echo __('Edit Memorial'); ?></legend>
	<?php
		echo $this->Form->input('Mem_ID');
		echo $this->Form->input('Library_ID');
		echo $this->Form->input('Donor_ID');
		echo $this->Form->input('Item_ID');
		echo $this->Form->input('Party_Memorialized');
		echo $this->Form->input('Description');
		echo $this->Form->input('Memorial_Inscription');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Memorial.Mem_ID')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Memorial.Mem_ID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Memorials'), array('action' => 'index')); ?></li>
	</ul>
</div>
