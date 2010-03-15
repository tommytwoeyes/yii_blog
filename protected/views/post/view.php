<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title,
);
?>
<h1>View Post #<?php echo $model->id; ?></h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Post',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Post',array('create')); ?></li>
	<li><?php echo CHtml::link('Update Post',array('update','id'=>$model->id)); ?></li>
	<li><?php echo CHtml::linkButton('Delete Post',array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure to delete this item?')); ?></li>
	<li><?php echo CHtml::link('Manage Post',array('admin')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
		'tags',
		'status',
		'create_time',
		'update_time',
		'author_id',
	),
)); ?>
