<?php
/* @var $this NewsController */
/* @var $data News */

echo CVarDumper::dumpAsString($data);
?>

<div class="row">
<!--    <div class="col-lg-12">
        <h1 class="page-header">
            Híreink 
        </h1>
    </div>-->
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i> <?php //echo CHtml::encode($data->newsItems->title_hun); ?></h4>
                <h7><?php echo CHtml::encode($data->create_date); ?></h7>
            </div>
            <div class="panel-body">
                <?php //echo CHtml::encode($data->text_hun); ?>
                <a href="#" class="btn btn-info">Bővebben</a>
            </div>
        </div>
    </div>
</div>


<!--<div class="view">

	<b><?php /*echo CHtml::encode($data->getAttributeLabel('news_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->news_id), array('view', 'id'=>$data->news_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_date')); ?>:</b>
	<?php echo CHtml::encode($data->create_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public_date')); ?>:</b>
	<?php echo CHtml::encode($data->public_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_mode')); ?>:</b>
	<?php echo CHtml::encode($data->test_mode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->public_user_id); */?>
	<br />


</div>-->