<?php
$this->breadcrumbs=array(
	'Posts',
);
?>

<h1>List Post</h1>

<ul class="actions">
	<li><?php echo CHtml::link('Create Post',array('create')); ?></li>
	<li><?php echo CHtml::link('Manage Post',array('admin')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
