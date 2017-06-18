


<?php
/* @var $this ProjectsController */
/* @var $model Projects */

if ($model->project_type_id = 1) {
    $this->breadcrumbs = array(
        'Nem hivatalos fordítások' => array('unofficial'),
        $model->project_name,
    );
} elseif ($model->project_type_id = 2) {
    $this->breadcrumbs = array(
        'Hivatalos fordítások' => array('official'),
        $model->project_name,
    );
} else {
    $this->breadcrumbs = array(
        'Projekjeink' => array('index'),
        $model->project_name,
    );
}
?>


<div class="row">
    <div class="col-md-8">
        <div class="item">

            <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/' . $model->picture_linke, '', array('class' => 'img-responsive')); ?>
        </div>
    </div>

    <div class="col-md-4">
        <h3><?php echo $model->project_name; ?></h3>
        <p><?php echo $model->text; ?></p>
        <h3>Állapot</h3>
        <ul>
            <li>Fordítás:   <?php echo $model->conditions->translation; ?> %</li> 
            <li>Lektorálás: <?php echo $model->conditions->proofreading; ?> %</li>
            <li>Tesztelés:  <?php echo $model->conditions->testing_status->text; ?></li>
            <li>Tervezett kiadás: <?php echo Yii::app()->dateFormatter->format('yyyy.MM.dd', $model->sheduled_release_date); ?></li>
            <li>Kiadva: <?php echo Yii::app()->dateFormatter->format('yyyy.MM.dd', $model->public_date); ?></li>
        </ul>

        <?php 
            if (isset($data->download_link)) {
                echo CHtml::link(CHtml::encode('Letöltés'), array('view', 'id'=>$model->download_link),array('class'=>'btn btn-primary')); 
            }
        ?>     

    </div>

</div>

<div class="row">    
    <div class="col-lg-12">
        <h3 class="page-header">Kapcsolódó projektek</h3>
    </div>
    
    
    <?php
       
        $criteria = new CDbCriteria();
        $criteria->condition = 'projects_id = :projects_id';
        $criteria->params=(array(':projects_id'=>$model->projects_id));
        
        $dataProvider2=new CActiveDataProvider('ProjectsPart',
                array(
                    'criteria'=>$criteria
                )
                );
        $this->renderPartial('_projects_part',array(
                'dataProvider'=>$dataProvider2,
        ));
    
                
       
    ?>
    
</div>



