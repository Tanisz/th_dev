<?php
/* @var $this ProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nem hivatalos játékfordítások',
);
?>

<h1>Nem hivatalos játékfordítások</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider, 
	'itemView'=>'_view',
        'summaryText' => '',
        'emptyText'=>''
)); ?>
