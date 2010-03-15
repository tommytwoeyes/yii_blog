<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<h1>Update Comment <?php echo $model->id; ?></h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Comment',array('index')); ?></li>
	<li><?php echo CHtml::link('Create Comment',array('create')); ?></li>
	<li><?php echo CHtml::link('View Comment',array('view','id'=>$model->id)); ?></li>
	<li><?php echo CHtml::link('Manage Comment',array('admin')); ?></li>
</ul><!-- actions -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>