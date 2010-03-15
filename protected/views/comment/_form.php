<div class="form">

<?php echo CHtml::beginForm(); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'content'); ?>
		<?php echo CHtml::activeTextArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo CHtml::error($model,'content'); ?>
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
		<?php echo CHtml::activeLabelEx($model,'author'); ?>
		<?php echo CHtml::activeTextField($model,'author',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'email'); ?>
		<?php echo CHtml::activeTextField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'url'); ?>
		<?php echo CHtml::activeTextField($model,'url',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo CHtml::error($model,'url'); ?>
	</div>

	<div class="row">
		<?php echo CHtml::activeLabelEx($model,'post_id'); ?>
		<?php echo CHtml::activeTextField($model,'post_id'); ?>
		<?php echo CHtml::error($model,'post_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php echo CHtml::endForm(); ?>

</div><!-- form -->