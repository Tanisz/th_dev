<style>
    .navbar-brand {
        padding: 0px;
    }
    .navbar-brand>img {
        height: 100%;
        padding: 15px;
        width: auto;
    }
</style>    

<?php
$image = '<span>' . chtml::image(Yii::app()->request->baseUrl . '/images/logo/th_logo.png', '',array('width' => 50, 'height' => 50)) . '</span>' . CHtml::encode($this->pageTitle);
// echo CHtml::link($image, array('site/index'), array('class' => 'navbar-brand'));
$this->widget('booster.widgets.TbNavbar', array(
    //'type' => 'inverse', // null or 'inverse'
    'brand' => $image,
    'brandUrl' => array('site/index'),
    'collapse' => true, // requires bootstrap-responsive.css
    'items' => array(
        array(
            'class' => 'booster.widgets.TbMenu',
            'htmlOptions' => array('class' => 'nav navbar-nav navbar-right pull-right'),
            'items' => array(
                array('label' => Yii::t('lang', 'Kezdőlap'), 'url' => array('/site/index')),
                array('label' => Yii::t('lang', 'Rólunk')/* .'<b class="caret"></b>' */, 'url' => array('site/page', 'view' => 'about')),
                array('label' => Yii::t('lang', 'Projektjeink'), 'url' => array(''), 'itemOptions' => array('class' => 'dropdown'), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                    'items' => array(
                        array('label' => Yii::t('lang', 'Játékfordítások (Hivatalos)'), 'url' => array('site/official')),
                        array('label' => Yii::t('lang', 'Játékfordítások (Nem hivatalos)'), 'url' => array('projects/unofficial')),
                        array('label' => Yii::t('lang', 'Játékfordítás-tesztelések'), 'url' => array('site/gamestesting')),
                        array('label' => Yii::t('lang', 'Képregényfordítások'), 'url' => array('site/comics')),
                    )),
                /* Parte de administracion, solo visible cuando el admin se conecta */
                array('label' => Yii::t('lang', 'Hasznos'), 'url' => '#', 'itemOptions' => array('class' => 'dropdown'), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                    'items' => array(
                        array('label' => Yii::t('lang', 'Fordítóknak'), 'url' => array('site/team')),
                        array('label' => Yii::t('lang', 'Jelentkezés'), 'url' => array('site/team')),
                        array('label' => Yii::t('lang', 'Támogatás'), 'url' => array('site/team')),
                    )),
              /*  array('label' => Yii::t('lang', 'Belépés'), 'items' => array(
                        'htmlOptions' => array('class' => 'dropdown-toggle',
                            'template' => $this->widget('LoginFormPortlet', array(), true),
                        ),
                    ), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)*/
            ),
        ),
        
    ),
));
?>

