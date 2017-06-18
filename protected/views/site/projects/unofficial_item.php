<div class="col-md-4">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5><?php echo $model->project_name;?></h5>
        </div>
        <div class="panel-body">
            <?php //echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/walking_dead_new_frontier.jpg', '', array('class' => 'pull-left gap-right')); 
                echo CHtml::image(Yii::app()->request->baseUrl . $model->link, '', array('class' => 'pull-left gap-right')); 
            ?>

        </div>
        <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a> <a href="#" class="btn btn-primary">Letöltés</a></div>

    </div>
</div>