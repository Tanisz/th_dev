<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->

        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <?php
            $image = '<span>' . chtml::image(Yii::app()->request->baseUrl . '/images/logo/th_logo.png', '', array('width' => 50, 'height' => 50)) . '</span>' . CHtml::encode($this->pageTitle);
            echo CHtml::link($image, array('site/index'), array('class' => 'navbar-brand'));
            ?> 

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php
            $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => Yii::t('lang', 'Kezdőlap'), 'url' => array('/site/index')),
                    //array('label' => Yii::t('lang','Rólunk'), 'url'=>array('/site/page', 'view'=>'about')),
                    array('label' => Yii::t('lang', 'Rólunk')/* .'<b class="caret"></b>' */, 'url' => array('site/page', 'view' => 'about')/* ,'itemOptions'=> array('class'=>'dropdown'),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'), */
                    /* 'items'=>array(                            
                      array('label' => Yii::t('lang','Rólunk'), 'url'=>array('/site/page', 'view'=>'about')),
                      array('label'=>Yii::t('lang','Csapatunk'), 'url'=>array('site/team',array('member'=>'oj'))),
                      ) */                    ),
                    array('label' => Yii::t('lang', 'Projektjeink') . '<b class="caret"></b>', 'url' => array(''), 'itemOptions' => array('class' => 'dropdown'), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                        'items' => array(
                            array('label' => Yii::t('lang', 'Játékfordítások (Hivatalos)'), 'url' => array('site/official')),
                            array('label' => Yii::t('lang', 'Játékfordítások (Nem hivatalos)'), 'url' => array('site/unofficial')),
                            array('label' => Yii::t('lang', 'Játékfordítás-tesztelések'), 'url' => array('site/gamestesting')),
                            array('label' => Yii::t('lang', 'Képregényfordítások'), 'url' => array('site/comics')),
                        )),
                    /* array('label' => Yii::t('lang','Letöltések').'<b class="caret"></b>', 'url' => array(''),'itemOptions'=> array('class'=>'dropdown'),'linkOptions'=>array('class'=>'dropdown-toggle','data-toggle'=>'dropdown'),
                      'items'=>array(
                      array('label'=>Yii::t('lang','Képregények'), 'url'=>array('site/project')),
                      array('label'=>Yii::t('lang','Játékok'), 'url'=>array('site/characters')),

                      )), */
                    array('label' => Yii::t('lang', 'Hasznos') . '<b class="caret"></b>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown'), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                        'items' => array(
                            array('label' => Yii::t('lang', 'Fordítóknak'), 'url' => array('site/team')),
                            array('label' => Yii::t('lang', 'Jelentkezés'), 'url' => array('site/team')),
                            array('label' => Yii::t('lang', 'Támogatás'), 'url' => array('site/team')),
                        )),
                    array('label' => Yii::t('lang', 'Login') . '<b class="caret"></b>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown'), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
                            'items' => array(
                                array('label'=>'login','itemTemplate'=>$this->widget('LoginFormPortlet',array(),true))
                            ),
                        ),
                    array('label' => Yii::t('lang', 'Logout') . '(' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    
                ),
                 
                'htmlOptions' => array('class' => 'nav navbar-nav navbar-right'),
                'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                'encodeLabel' => false,
            ));
            ?>
        </div>    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="portfolio-1-col.html">1 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-2-col.html">2 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-3-col.html">3 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-4-col.html">4 Column Portfolio</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Single Portfolio Item</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog-home-1.html">Blog Home 1</a>
                                </li>
                                <li>
                                    <a href="blog-home-2.html">Blog Home 2</a>
                                </li>
                                <li>
                                    <a href="blog-post.html">Blog Post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="full-width.html">Full Width Page</a>
                                </li>
                                <li>
                                    <a href="sidebar.html">Sidebar Page</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>-->
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
