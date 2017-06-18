<!DOCTYPE html>
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
        //Yii::app()->bootstrap->register();
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/bootstrap.min.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/modern-business.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/cyborg-bootstrap.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/css/login.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl . '/bootstrap/font-awesome/css/font-awesome.min.css');


        //Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/contact_me.js', CClientScript::POS_END);
        Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/bootstrap/js/jqBootstrapValidation.js', CClientScript::POS_END);


        Yii::app()->clientScript->registerScript('carousel', "$('.carousel').carousel({
        interval: 5000 //changes the speed
        })", CClientScript::POS_END);
        ?>

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>

        <!-- Navigation -->
        <?php $this->renderPartial('navbar'); ?>

        <!-- Header Carousel -->
        <?php $this->renderPartial('header'); ?>

        <!-- Page Content -->
        <div class="container">

            <!-- Marketing Icons Section -->
            <?php $this->renderPartial('news'); ?>    
            <!-- /.row -->

            <!-- Portfolio Section -->
            <?php //$this->renderPartial('portfolio'); ?>
            <!-- /.row -->

            <!-- Features Section -->
            <?php //$this->renderPartial('futures'); ?>
            <!-- /.row -->

<!--            <hr>-->

            <!-- Call to Action Section -->
<!--            <div class="well">
                <div class="row">
                    <div class="col-md-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                    </div>
                </div>
            </div>-->

            <hr>

            <!-- Footer -->
            <?php $this->renderPartial('footer'); ?>

        </div>
        <!-- /.container -->


        <!-- Script to Activate the Carousel -->
        <script>
            //    $('.carousel').carousel({
            //        interval: 5000 //changes the speed
            //    })
        </script>

    </body>
</html>