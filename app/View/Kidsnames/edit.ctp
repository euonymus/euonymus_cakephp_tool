<div class="kidsnames form">
<?php echo $this->Form->create('Kidsname'); ?>
	<fieldset>
		<legend><?php echo __('Edit Kidsname'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
                echo $this->Form->input('gender', array('options' => Kidsname::$genderList));
		echo $this->Form->input('global');
		echo $this->Form->input('gender_match');
		echo $this->Form->input('foreign_meaning');
		echo $this->Form->input('remarks');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Kidsname.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Kidsname.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Kidsnames'), array('action' => 'index')); ?></li>
	</ul>
</div>
