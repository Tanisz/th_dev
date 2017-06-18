<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo Yii::trace(CVarDumper::dumpAsString($dataProvider), '$dataProvider');
$this->widget('zii.widgets.CListView', array(
            'dataProvider'=>$dataProvider, 
            'itemView'=>'projects_part',
            'summaryText' => '',
            'emptyText'=>''
        ));