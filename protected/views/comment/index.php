<?php
$this->breadcrumbs=array(
	'Comments',
);
?>

<h1>List Comment</h1>

<ul class="actions">
	<li><?php echo CHtml::link('Create Comment',array('create')); ?></li>
	<li><?php echo CHtml::link('Manage Comment',array('admin')); ?></li>
</ul><!-- actions -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
