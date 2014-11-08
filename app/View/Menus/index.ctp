<div class="well bs-component">
    <h2>メニュー一覧</h2>
    <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Menu'), array('action' => 'add')); ?></li>
	</ul>
    </div>
    <table class="table table-condensed">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('image'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('restaurant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('remarks'); ?></th>
			<th><?php echo $this->Paginator->sort('combo'); ?></th>
			<th><?php echo $this->Paginator->sort('lunch'); ?></th>
			<th><?php echo $this->Paginator->sort('dinner'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('tags'); ?></th>
			<th><?php echo $this->Paginator->sort('point'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($menus as $menu): ?>
	<tr>
		<td><?php echo h($menu['Menu']['id']); ?>&nbsp;</td>
		<td><?php if (!is_null($menu['Menu']['image'])) echo $this->Html->image($menu['Menu']['image'], array('width'=>'80px')); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['name']); ?>&nbsp;</td>
		<td><?php echo h($menu['Restaurant']['name']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['description']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['remarks']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['combo']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['lunch']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['dinner']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['price']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['tags']); ?>&nbsp;</td>
		<td><?php echo h($menu['Menu']['point']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $menu['Menu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $menu['Menu']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $menu['Menu']['id']), array(), __('Are you sure you want to delete # %s?', $menu['Menu']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
    </table>


    <?= $this->element('paginator') ?>
</div>
