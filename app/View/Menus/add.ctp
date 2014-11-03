<div class="menus form">
<?php echo $this->Form->create('Menu'); ?>
	<fieldset>
		<legend><?php echo __('Add Menu'); ?></legend>
	<?php
		echo $this->Form->input('name');
                echo $this->Form->input('restaurant_id', array('options' => $restaurantList));
		echo $this->Form->input('description');
		echo $this->Form->input('remarks');
		echo $this->Form->input('combo');
		echo $this->Form->input('lunch');
		echo $this->Form->input('dinner');
		echo $this->Form->input('price');
		/* echo $this->Form->input('tags'); */
                echo $this->Form->input('tag_id', array('options' => $menuTagList));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?></li>
	</ul>
</div>
