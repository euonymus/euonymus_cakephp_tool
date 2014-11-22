<div class="kidsnames view">
<h2><?php echo __('Kidsname'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Global'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['global']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender Match'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['gender_match']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foreign Meanint'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['foreign_meanint']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remarks'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['remarks']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($kidsname['Kidsname']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Kidsname'), array('action' => 'edit', $kidsname['Kidsname']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Kidsname'), array('action' => 'delete', $kidsname['Kidsname']['id']), array(), __('Are you sure you want to delete # %s?', $kidsname['Kidsname']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Kidsnames'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kidsname'), array('action' => 'add')); ?> </li>
	</ul>
</div>
