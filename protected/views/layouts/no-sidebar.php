<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Tanisz">

        <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicons/LOGO_egyszeru_sotet.ico" type="image/x-icon" />

        <?php
        Yii::app()->clientScript->registerCoreScript('jquery');
        Yii::app()->clientScript->registerCoreScript('jquery.ui');

        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/bootstrap.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/modern-business.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/cyborg-bootstrap.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/font-awesome/css/font-awesome.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/login.css');

        //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/contact_me.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/jqBootstrapValidation.js', CClientScript::POS_END);


        
        ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
         <!-- Navigation -->
        <?php $this->renderPartial('/site/navbar'); ?>
         
         

         <div class="container">
             <br>
             <?php $this->renderPartial('/site/breadcrumbs');?>
             <?php echo $content; ?>
         
         <!-- Footer -->
            <?php $this->renderPartial('/site/footer'); ?>

        </div>
        <!-- /.container -->
        

    </body>
</html>