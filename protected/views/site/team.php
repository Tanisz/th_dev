<style>
    .media-object{
        max-width: 200px;
        max-height: 200px;
    }
</style>

<div class="page-header">
  <h1>A csapat</h1>
</div>

<div class="media">
  <div class="media-left">
    <a href="#">
<!--      <img class="media-object" src="..." alt="...">-->
        <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/team/Finn.jpg','',array('class'=>'media-object')); ?>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Farting Squirrel</h3>
    <h4>Csapatvezető</h4>
    <h6> Weboldalak/elérhetőség</h6>
        <p> 
          E-mail:
          <br>
          Twitter: <?php echo CHtml::link('Farting Squirrel','https://twitter.com/Fartin_Squirrel',array('target'=>'_blank'));?>
          <br>
          YouTube-csatorna: <?php echo CHtml::link('FartingSquirrel','https://www.youtube.com/user/fartsquirrel',array('target'=>'_blank'));?>
          <br>
          "Blog" : <?php echo CHtml::link('Adventure Time Blog','http://adventuretime.blog.hu/',array('target'=>'_blank'));?>
        </p>    
    
  </div>
</div>
<br>
<div class="media">
  <div class="media-left">
    <a href="#">
<!--     <img class="media-object" src="..." alt="...">-->
        <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/team/default_user.png','',array('class'=>'media-object')); ?>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Forró Fanni</h3>
    <h4>Projektmenedzser
        <br>
        Fordító, lektor
    </h4>
    <h6> Weboldalak/elérhetőség</h6>
        <p> 
          E-mail:
          
        </p>    
    
  </div>
</div>
<br>
<div class="media">
  <div class="media-left">
    <a href="#">
        <?php echo CHtml::image(Yii::app()->request->baseUrl . '/images/team/Buci.jpg','',array('class'=>'media-object')); ?>
    </a>
  </div>
  <div class="media-body">
    <h3 class="media-heading">Budai 'BuC!' Péter</h3>
    <h4>Projektmenedzser
        <br>
        Fordító
    </h4>
    <h6> Weboldalak/elérhetőség</h6>
        <p> 
          E-mail:
          
        </p>    
    
  </div>
</div>
