<style>
    /* Smaller than standard 960 (devices and browsers) */
    @media only screen and (max-width: 959px) {     
    }

    /* Tablet Portrait size to standard 960 (devices and browsers) */
    @media only screen and (min-width: 768px) and (max-width: 959px) {}

    /* All Mobile Sizes (devices and browser) */
    @media only screen and (max-width: 767px) {}

    /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
    @media only screen and (min-width: 480px) and (max-width: 767px) {}

    /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
    @media only screen and (max-width: 479px) {}

    @media (min-width: 768px){
        .carousel-inner{
            width: 100%;
            margin: 0;
        }
    }
</style>
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="fill" style="background-image:url('images/sliders/Talehunters_fej.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item active">
            <div class="fill" style="background-image:url('images/sliders/BATMAN.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 1</h2>-->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/sliders/GAME.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 2</h2>-->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/sliders/MINECRAFT.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 3</h2>-->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/sliders/TALES.jpg');"></div>
            <div class="carousel-caption">
                <h2>Caption 4</h2>
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/sliders/michonne.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 5</h2>-->
            </div>
        </div>
        <div class="item">
            <div class="fill" style="background-image:url('images/sliders/monkey.jpg');"></div>
            <div class="carousel-caption">
                <!--                    <h2>Caption 6</h2>-->
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>
</header>
