<div class="kidsnames index">
	<h2><?php echo __('Kidsnames'); ?></h2>

<?= $this->Form->create(null, array('url' => '/kidsnames', 'type' => 'get')) ?>
<style>
form > div.hoge {
 display:block;
 border: medium solid #ff00ff;
 float:left ;!important
}
</style>
<div class="hoge">
	<?= $this->Form->input('gender', array('options' => Kidsname::$genderList)) ?>
</div>
<div class="hoge">
   <?= $this->Form->input('global', array('label' => '海外で通用する名前')) ?>
</div>
<div class="hoge">
   <?= $this->Form->input('gmatch', array('type' => 'checkbox', 'label' => '男性名刺・女性名刺にマッチ')) ?>
</div>
<div class="hoge">
   <?= $this->Form->input('meaning', array('type' => 'checkbox', 'label'=>'外国語で意味を持たない')) ?>
</div>


<?php echo $this->Form->end('検索'); ?>



	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender'); ?></th>
			<th><?php echo $this->Paginator->sort('global'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_match'); ?></th>
			<th><?php echo $this->Paginator->sort('foreign_meaning'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($kidsnames as $kidsname): ?>
	<tr>
		<td><?php echo h($kidsname['Kidsname']['id']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['name']); ?>&nbsp;</td>
		<td><?php echo h(Kidsname::$genderList[$kidsname['Kidsname']['gender']]); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['global']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['gender_match']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['foreign_meaning']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['modified']); ?>&nbsp;</td>
		<td><?php echo h($kidsname['Kidsname']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $kidsname['Kidsname']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $kidsname['Kidsname']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $kidsname['Kidsname']['id']), array(), __('Are you sure you want to delete # %s?', $kidsname['Kidsname']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Kidsname'), array('action' => 'add')); ?></li>
	</ul>
</div>
