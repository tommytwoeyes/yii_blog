<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Manage',
);
?>
<h1>Manage Posts</h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Post',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Post',array('create')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		/*
		'update_time',
		'author_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
