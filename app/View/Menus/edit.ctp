<div class="menus form">
<?php 
$formOption = array('enctype' => 'multipart/form-data', 'action' => 'upload','type' => 'post', 'url' => $this->here);
echo $this->Form->create('Menu', $formOption); ?>

	<fieldset>
		<legend><?php echo __('Edit Menu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
                echo $this->Form->input('restaurant_id', array('options' => $restaurantList));
		echo $this->Form->input('description');
		echo $this->Form->input('remarks');
		echo $this->Form->input('combo');
		echo $this->Form->input('lunch');
		echo $this->Form->input('dinner');
		echo $this->Form->input('price');
		echo $this->Form->input('tags');
	?>





<? if(isset($this->data['Menu']['image'])): ?>
             <img src="<?= $this->data['Menu']['image'] ?>" class="img-thumbnail"/>
<? endif; ?>
                 <?= $this->Form->input('NoModel.image_file', array('type' => 'file', 'label'=>'','class'=>'btn btn-info')) ?>
                 <?= $this->Form->radio('NoModel.cropType', 
			  array('1' => '中央寄せ寄せ', '0' => '0,0ポイントから'),
			  array('label' => false, 'default' => '1', 'legend'=> false)) ?>
                 <br><div class="alert alert-warning"><span class="glyphicon glyphicon-info-sign"></span>プロフィール画像は 400 x 400ピクセル に縮小されます</div>




	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Menu.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Menu.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Menus'), array('action' => 'index')); ?></li>
	</ul>
</div>
