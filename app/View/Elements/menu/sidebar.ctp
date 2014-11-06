<div class="btn-group-vertical">
   <?= $this->Html->link(
			 '<i class="mdi-action-home" style="font-size: 20pt;"></i>Home',
			 '/',
			 array('class' => 'btn btn-default', 'escape' => false)) ?>
   <?= $this->Html->link(
			 '<i class="mdi-content-sort" style="font-size: 20pt;"></i>投資情報',
			 '/dgi/assets',
			 array('class' => 'btn btn-default', 'escape' => false)) ?>
   <?= $this->Html->link(
			 '<i class="mdi-av-playlist-add" style="font-size: 20pt;"></i>取引情報',
			 '/dgi/investments',
			 array('class' => 'btn btn-default', 'escape' => false)) ?>
   <?= $this->Html->link(
			 '<i class="mdi-communication-business" style="font-size: 20pt;"></i>会社情報',
			 '/admin/companies',
			 array('class' => 'btn btn-default', 'escape' => false)) ?>
   <?= $this->Html->link(
			 '<i class="mdi-action-settings" style="font-size: 20pt;"></i>設定',
			 '/dgi/master',
			 array('class' => 'btn btn-default', 'escape' => false)) ?>
</div>
