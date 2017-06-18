<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'projects_id'); ?>
		<?php echo $form->textField($model,'projects_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_type_id'); ?>
		<?php echo $form->textField($model,'project_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conditions_id'); ?>
		<?php echo $form->textField($model,'conditions_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_date'); ?>
		<?php echo $form->textField($model,'create_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public_date'); ?>
		<?php echo $form->textField($model,'public_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public_user_id'); ?>
		<?php echo $form->textField($model,'public_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'download_link'); ?>
		<?php echo $form->textField($model,'download_link',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sheduled_release_date'); ?>
		<?php echo $form->textField($model,'sheduled_release_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'picture_linke'); ?>
		<?php echo $form->textField($model,'picture_linke',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->