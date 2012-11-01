<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    	<?php $prefix="../";?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Island Creamery | Menus</title>
        <meta name="description" content="">
		<!--[if lt IE 9]>
			<script src="<?php echo $prefix;?>js/html5shiv.js"></script>
		<![endif]-->
        <link rel="stylesheet" href="<?php echo $prefix;?>css/normalize.css">
        <link rel="stylesheet" href="<?php echo $prefix;?>css/main.css">
        <script src="<?php echo $prefix;?>js/vendor/modernizr-2.6.1.min.js"></script>
        <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'xx-xxxxxxxx-x']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
    </head>
    <body id="menus">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <header>
            <div id="top">
                <div class="top-left"></div>
                <h1 class="logo ir">Island Creamery</h1>
                <div class="top-right"></div>
            </div>
            <div id="mid">
                <div>PREMIUM HOME MADE ICE CREAM IN THE MOST UNIQUE FLAVORS!</div>
            </div>
        </header>

        <?php include('../static/nav.php') ?>

        <div class="main-content-container">
        <div id="menus" class="main-content">
            <div class="menu-banner">
                <div class="content clearfix">
                    <div class="image">
                        <img src="<?php echo $prefix;?>uploads/menus/nachos.jpg" width="580" height:"280"/>
                    </div>
                    <div class="text">
                        <div class="text-title">Island Nachos Fries</div>
                        <div class="text-content">"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</div>
                    </div>
                </div>
                <div class="image-selector clearfix">
                    <a href="" class="selected"></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                    <a href=""></a>
                </div>
            </div> <!--menu-banner-->
            
            <div class="menu-content" style="margin-top: 10px">
                <div class="header" id="ice-cream">
                    <h1>Ice Cream</h1>
                </div>
                <div class="content">

                    <?php 
                    for($i=0;$i<10;$i++){
                    ?>
                    <div class="product">
                        <img src="<?php echo $prefix;?>uploads/menus/product-1.png" width="152" height="100">
                        <div class="product-desc">ICE CREAM</div>
                    </div>
                    <?php
                    }
                    ?>

                    <div class="description">
                        <p>Lorem ipsum dolor sit amet. Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <img src="../img/menu-1.png" width="720" height="1016">
                    </div>

                </div>
            </div>

            <div class="menu-content" style="margin-top: 10px">
                <div class="header" id="dessert">
                    <h1>Dessert</h1>
                </div>
                <div class="content">

                    <!-- <?php 
                    for($i=0;$i<10;$i++){
                    ?>
                    <div class="product">
                        <img src="<?php echo $prefix;?>uploads/menus/product-1.png" width="152" height="100">
                        <div class="product-desc">ICE CREAM</div>
                    </div>
                    <?php
                    }
                    ?> -->

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    </div>
                    
                </div>
            </div>

            <div class="menu-content" style="margin-top: 10px">
                <div class="header" id="cafe">
                    <h1>Cafe</h1>
                </div>
                <div class="content">

                    <!-- <?php 
                    for($i=0;$i<10;$i++){
                    ?>
                    <div class="product">
                        <img src="<?php echo $prefix;?>uploads/menus/product-1.png" width="152" height="100">
                        <div class="product-desc">ICE CREAM</div>
                    </div>
                    <?php
                    }
                    ?> -->

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    </div>

                </div>
            </div>

        </div>
        </div> <!--main-content-container-->

        <?php include('../static/footer.php') ?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="<?php echo $prefix;?>js/plugins.js"></script>
        <script src="<?php echo $prefix;?>js/main.js"></script>

    </body>
</html>
