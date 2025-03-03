<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>
            <?php if(isset($app_settings) && isset($app_settings['portal_short_name'])): ?>
                <?php echo e($app_settings['portal_short_name']); ?> ::
            <?php else: ?>
                <?php echo $__env->yieldContent('title', config('app.title', 'DMO Savings Bond ::')); ?>
            <?php endif; ?>
            <?php echo $__env->yieldContent('title_prefix'); ?>
            <?php echo $__env->yieldContent('title_postfix', config('app.title_postfix', '')); ?>
        </title>
        
        <?php if(isset($app_settings) && isset($app_settings['portal_seo_description'])): ?>
            <meta name="description" content="<?php echo e($app_settings['portal_seo_description']); ?>" />
        <?php endif; ?>

        <?php if(isset($app_settings) && isset($app_settings['portal_seo_keywords'])): ?>
            <meta name="keywords" content="<?php echo e($app_settings['portal_seo_keywords']); ?>" />
        <?php endif; ?>


		<link rel="shortcut icon" href="<?php echo e(asset('gradebook-frontend-blue/images/scola-icon.fw.png')); ?>">
		<link rel="icon" href="<?php echo e(asset('gradebook-frontend-blue/images/scola-icon.fw.png')); ?>" type="image/png">

        <!--====== Slick css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/slick.css')); ?>">

        <!--====== Line Icons css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/LineIcons.css')); ?>">

        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/magnific-popup.css')); ?>">

        <!--====== tailwind css ======-->
        <link rel="stylesheet" href="<?php echo e(asset('gradebook-frontend-blue/css/tailwind.css')); ?>">


		<!-- Custom CSS -->
        <?php echo $__env->yieldContent('third_party_stylesheets'); ?>
        <?php echo $__env->yieldPushContent('page_css'); ?>

        <style>
            .header-hero::before {
                content: '';
                z-index: -1;
                opacity: .9;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                --bg-opacity: 0.9;
                background-color: #bee3f8;
                background-color: rgba(190, 227, 248, var(--bg-opacity));
            }
            .services-title {
                margin-bottom: 0rem;
                font-size: 1.5rem;
                font-weight: 500;
                --text-opacity: 1;
                color: #1a202c;
                color: rgba(26, 32, 44, var(--text-opacity));
            }
        </style>
          
    </head>
    <body>


    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="w-full">

                        <?php echo $__env->yieldContent('nav'); ?>

                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->

     
        <div id="home" class="relative z-10 header-hero" style="background-image: url(<?php echo e(asset('gradebook-frontend-blue/images/savings-bg.png')); ?>)">
            <div class="container">
                <div class="justify-center row">
                    <div class="w-full lg:w-5/6 xl:w-2/3">
                        <div class="pt-48 pb-64 text-center header-content">
                            <h3 class="mb-5 text-3xl font-semibold leading-tight text-gray-900 md:text-5xl">FGN Savings Bond</h3>
                            <p class="px-5 mb-10 text-xl text-grey-900">Invest directly into the FGN Savings Bond. Backed by the full credit of the Federal Government of Nigeria.</p>
                            <ul class="flex flex-wrap justify-center">
                                <li><a class="mx-3 main-btn video-popup" href="https://www.youtube.com/watch?v=r44RKWyfcFw">FIND OUT MORE <i class="ml-2 lni-play"></i></a></li>
                                <li><a class="mx-3 main-btn gradient-btn" href="#contact">GET STARTED NOW</a></li>
                            </ul>
                        </div> <!-- header content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="absolute bottom-0 z-20 w-full h-auto -mb-1 header-shape">
                <img src="<?php echo e(asset('gradebook-frontend-blue/images/header-shape.svg')); ?>" alt="shape">
            </div>
        </div> 
        
        
        <!-- header content -->
    </header>
    <!--====== HEADER PART ENDS ======-->



    <?php echo $__env->yieldContent('body'); ?>



    <?php echo $__env->yieldContent('footer'); ?>


    <!--====== jquery js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/vendor/modernizr-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/vendor/jquery-1.12.4.min.js')); ?>"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/ajax-contact.js')); ?>"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/scrolling-nav.js')); ?>"></script>

    <!--====== Validator js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/validator.min.js')); ?>"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/jquery.magnific-popup.min.js')); ?>"></script>

    <!--====== Slick js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/slick.min.js')); ?>"></script>

    <!--====== Main js ======-->
    <script src="<?php echo e(asset('gradebook-frontend-blue/js/main.js')); ?>"></script>


    </body>
</html><?php /**PATH C:\xampp\htdocs\LARAVEL\Hasob\dmo-savings-bond-portal\resources\views/layouts/gradebook-frontend-blue/page-master.blade.php ENDPATH**/ ?>