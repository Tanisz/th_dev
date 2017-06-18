<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('users_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->users_id), array('view', 'id'=>$data->users_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nick_name')); ?>:</b>
	<?php echo CHtml::encode($data->nick_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reg_date')); ?>:</b>
	<?php echo CHtml::encode($data->reg_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('storno')); ?>:</b>
	<?php echo CHtml::encode($data->storno); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('storno_date')); ?>:</b>
	<?php echo CHtml::encode($data->storno_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('superuser')); ?>:</b>
	<?php echo CHtml::encode($data->superuser); ?>
	<br />

	*/ ?>

</div>