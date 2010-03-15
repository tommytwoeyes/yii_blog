<div class="form">

<?php echo CHtml::beginForm(); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'title'); ?>
		<?php echo CHtml::activeTextField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'content'); ?>
		<?php echo CHtml::activeTextArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'tags'); ?>
		<?php echo CHtml::activeTextArea($model,'tags',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::dropDownList($post, 'status', Lookup::items('PostStatus')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php echo CHtml::endForm(); ?>

</div><!-- form -->