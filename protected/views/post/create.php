<?php
$this->breadcrumbs=array(
	'Posts'=>array('index'),
	'Create',
);
?>
<h1>Create Post</h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Post',array('index')); ?></li>
	<li><?php echo CHtml::link('Manage Post',array('admin')); ?></li>
</ul><!-- actions -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>