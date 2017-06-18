<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Híreink'=>array('index'),
	$model->news_id,
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->news_id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->news_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>View News #<?php echo $model->news_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        //'cssFile' => Yii::app()->baseUrl . '/css/news_detail.css',
	'attributes'=>array(
		'news_id',
		'create_date',
		'create_user_id',
		'public_date',
		'test_mode',
		'public_user_id',
               
	),
)); ?>
