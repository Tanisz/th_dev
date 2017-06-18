<?php
/* @var $this ProjectsController */
/* @var $data Projects */
echo Yii::trace(CVarDumper::dumpAsString($data), 'actionRegistration ' . $data->projects_id);
?>



<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5><?php echo $data->project_name; ?></h5>
        </div>
        <div class="panel-body">
            <?php
            //echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/walking_dead_new_frontier.jpg', '', array('class' => 'pull-left gap-right')); 

            echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/thumb/' . $data->picture_linke, '', array('class' => 'pull-left gap-right'));
            ?>

        </div>
        <div class="panel-footer">
            <?php echo CHtml::link(CHtml::encode('Projekt állapota'), array('view', 'id' => $data->projects_id), array('class' => 'btn btn-default')); ?> 

            <?php
            if (isset($data->download_link)) {
                echo CHtml::link(CHtml::encode('Letöltés'), array('view', 'id' => $data->download_link), array('class' => 'btn btn-primary'));
            }
            ?>     
        </div>    

    </div>
</div>


