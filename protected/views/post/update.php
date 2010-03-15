<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);
?>

<h1>Update Post <?php echo $model->id; ?></h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Post',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Post',array('create')); ?></li>
	<li><?php echo CHtml::link('View Post',array('view','id'=>$model->id)); ?></li>
	<li><?php echo CHtml::link('Manage Post',array('admin')); ?></li>
</ul><!-- actions -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>