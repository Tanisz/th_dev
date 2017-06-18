<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'projects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'projects_id'); ?>
		<?php echo $form->textField($model,'projects_id'); ?>
		<?php echo $form->error($model,'projects_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_type_id'); ?>
		<?php echo $form->textField($model,'project_type_id'); ?>
		<?php echo $form->error($model,'project_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conditions_id'); ?>
		<?php echo $form->textField($model,'conditions_id'); ?>
		<?php echo $form->error($model,'conditions_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
		<?php echo $form->error($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_date'); ?>
		<?php echo $form->textField($model,'public_date'); ?>
		<?php echo $form->error($model,'public_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public_user_id'); ?>
		<?php echo $form->textField($model,'public_user_id'); ?>
		<?php echo $form->error($model,'public_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'download_link'); ?>
		<?php echo $form->textField($model,'download_link',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'download_link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sheduled_release_date'); ?>
		<?php echo $form->textField($model,'sheduled_release_date'); ?>
		<?php echo $form->error($model,'sheduled_release_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picture_linke'); ?>
		<?php echo $form->textField($model,'picture_linke',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'picture_linke'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->