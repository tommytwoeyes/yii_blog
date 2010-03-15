<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Manage',
);
?>
<h1>Manage Comments</h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Comment',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Comment',array('create')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id',
		'content',
		'status',
		'create_time',
		'author',
		'email',
		/*
		'url',
		'post_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
