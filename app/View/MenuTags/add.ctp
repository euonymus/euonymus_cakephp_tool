<div class="menuTags form">
<?php echo $this->Form->create('MenuTag'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu Tag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('accessories');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menu Tags'), array('action' => 'index')); ?></li>
	</ul>
</div>
