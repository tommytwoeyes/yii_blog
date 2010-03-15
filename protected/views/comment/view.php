<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);
?>
<h1>View Comment #<?php echo $model->id; ?></h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Comment',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Comment',array('create')); ?></li>
	<li><?php echo CHtml::link('Update Comment',array('update','id'=>$model->id)); ?></li>
	<li><?php echo CHtml::linkButton('Delete Comment',array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure to delete this item?')); ?></li>
	<li><?php echo CHtml::link('Manage Comment',array('admin')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'status',
		'create_time',
		'author',
		'email',
		'url',
		'post_id',
	),
)); ?>
