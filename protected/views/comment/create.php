<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	'Create',
);
?>
<h1>Create Comment</h1>

<ul class="actions">
	<li><?php echo CHtml::link('List Comment',array('index')); ?></li>
	<li><?php echo CHtml::link('Manage Comment',array('admin')); ?></li>
</ul><!-- actions -->

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>