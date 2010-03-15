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
		<?php echo CHtml::activeLabelEx($model,'status'); ?>
		<?php echo CHtml::activeTextField($model,'status'); ?>
		<?php echo CHtml::error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'create_time'); ?>
		<?php echo CHtml::activeTextField($model,'create_time'); ?>
		<?php echo CHtml::error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'update_time'); ?>
		<?php echo CHtml::activeTextField($model,'update_time'); ?>
		<?php echo CHtml::error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'author_id'); ?>
		<?php echo CHtml::activeTextField($model,'author_id'); ?>
		<?php echo CHtml::error($model,'author_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php echo CHtml::endForm(); ?>

</div><!-- form -->