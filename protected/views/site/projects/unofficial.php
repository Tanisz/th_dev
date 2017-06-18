<style>
    .gap-right {
    margin-right: 10px; 
}
.pull-left.gap-right {
    max-height: 185px;
}
</style>


<div class="col-lg-12">
    <h1 class="page-header">
        Nem hivatalos fordításaink
    </h1>
</div>


<?php

  $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_post',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
        'title',
        'create_time'=>'Post Time',
    ),
));
    
?>

<div class="row">
    
    
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Tales of Monkey Island</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/Monkey_ep1.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p class="text-left">A Monkey Island sorozat 5. része a Telltale Games-től.</p>-->
                
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a> <a href="#" class="btn btn-primary">Letöltés</a></div>
            
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> The Walking Dead: Michonne</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/Walking Dead Michonne.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p>Míg a Telltale The Walking Deadének harmadik évadára várunk, addig is a fejlesztők – a várakozási lázt enyhítendő – elhozták nekünk a TWD: Michonne-t, amely a címadó karakter történetét dolgozza fel a képregénybeli és a filmsorozatbeli szereplése közötti időszakban.</p>-->
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a><a href="#" class="btn btn-primary">Letöltés</a></div>
        </div>
    </div>
    
 </div>   
<div class="row">
    
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> Minecraft: Story Mode</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/Minecraft.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p>A Telltale Games legújabb alkotása, amelyben a nagy sikerű Minecraft sandbox-játék univerzumához ad egy történetet, és tálalja azt a már jól megszokott stílusában.</p>-->
<!--                <a href="#" class="btn btn-default">Teszt/vélemény a játékról</a>-->
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a><a href="#" class="btn btn-primary">Letöltés</a></div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> Tales from the Borderlands</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/Tales from the Borderlands.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p>A Telltale egy újabb remekműve, a Borderlands-széria legújabb része a TTG feldolgozásában, a Tales from the Borderlands. Remekül hozza a Borderlands világának a hangulatát, a poénos vonalat is, így egy rendkívül jó sit-com játéksorozatot kínál.</p>-->
               
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a><a href="#" class="btn btn-primary">Letöltés</a></div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> Game of Thrones</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/Game of Thrones.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p>A Tűz és jég dala franchise legújabb méltó tagja. Aki a sorozatot szereti, az ebben sem fog csalódni.</p>-->
                
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a><a href="#" class="btn btn-primary">Letöltés</a></div>
        </div>
    </div>
    
    
</div>

<div class="row">
   <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5> The Wolf Among Us</h5>
            </div>
            <div class="panel-body">
                <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/projects/unofficial/The Wolf Among Us.jpg','',array('class'=>'pull-left gap-right')); ?>
<!--                <p>A Telltale - a The Walking Dead után - második legnagyobb durranása, a The Wolf Among Us, amely sajnos kissé alulértékelt. Viszont azoknak, akik szeretik, itt van a magyarítása.</p>-->
                
            </div>
            <div class="panel-footer"><a href="#" class="btn btn-default">Projekt állapota</a><a href="#" class="btn btn-primary">Letöltés</a></div>
        </div>
    </div> 
</div>