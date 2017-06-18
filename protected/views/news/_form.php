<?php
/* @var $this NewsController */
/* @var $model News */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'news-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'news_id'); ?>
		<?php echo $form->textField($model,'news_id'); ?>
		<?php echo $form->error($model,'news_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_date'); ?>
		<?php echo $form->textField($model,'public_date'); ?>
		<?php echo $form->error($model,'public_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'test_mode'); ?>
		<?php echo $form->textField($model,'test_mode',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'test_mode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_user_id'); ?>
		<?php echo $form->textField($model,'public_user_id'); ?>
		<?php echo $form->error($model,'public_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->