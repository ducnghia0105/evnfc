<!DOCTYPE html>
<html>
<head>
    <?php 
        $fav = get_field('fav_icon','option');
    ?>
    <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- <link href="images/..." rel="shortcut icon"> -->
    <meta charset="UTF-8">
    <!-- <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'> -->

    <link rel="stylesheet" type="text/css" href="<?php echo CSSPATH; ?>font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSSPATH; ?>setting.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSSPATH; ?>evn-web.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSSPATH; ?>w3.css">
	<link rel="icon" href="<?php echo $fav;?>" type="image/x-icon"/>
	<?php wp_head(); ?>

    <script type="text/javascript" src="<?php echo JSPATH; ?>jquery-2.2.3.min.js" id="jquerycode"></script>
        <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
          <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
        
        <!-- owl -->
        <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" id="bootstrapjs"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" id="carouseljs"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js" id="momentjs"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js" id="datetimepickerjs"></script>
</head>

<?php
	$logo = get_field('logo', 'option');
?>
<!-- header start -->
<body>




<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo get_home_url('/'); ?>">
                <img src="<?php echo $logo; ?>" alt="logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
			<?php wp_nav_menu(array(
				'container_class' => 'menu-header',
				'theme_location' => 'primary-menu',
				'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav">%3$s</ul>',
				'walker' => new BS3_Walker_Nav_Menu,
			)); ?>


            <ul class="nav navbar-nav navbar-right">

                <li class="searchform">
                    <a data-toggle="modal" data-target="#popupsearch">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                            <path fill-rule="evenodd"
                                  d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                        </svg>
                    </a>
                </li>
				
				
				<?php
					$login_link = get_field('login_link', 'option');
					$register_link = get_field('register_link', 'option');
				
				?>
                <li class="headerbtn login">
                    <a href="<?php echo $login_link; ?>">
						<?php echo __('Đăng nhập', 'phongmy'); ?>
                    </a>
                </li>

                <li class="headerbtn register">
                    <a href="<?php echo $register_link; ?>">
                        <button class="btn btn-primary">

                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            </svg>
							
							<?php echo __('Đăng ký', 'phongmy'); ?>
                        </button>
                    </a>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div>
</nav>


<!-- show popup search -->
<!-- Modal -->
<div class="modal fade modal" id="popupsearch" tabindex="-1" role="dialog" aria-labelledby="popupsearch" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <img src="<?php echo IMGPATH; ?>exit.png" class="close tatpopup" data-dismiss="modal"
                     aria-label="Close"/>
                <form method="get" class="form formsearch my-2 my-lg-0" action="<?php bloginfo('url'); ?>">
                    <input class="form-control mr-sm-2 nhaptukhoa" type="search" name="s" id="s"
                           placeholder="Nhập từ khóa" aria-label="Search">
                    <!-- <button class="btn btn-primary my-2 my-sm-0" type="submit">Tìm kiếm</button> -->
                    <img class="icon-search" src="<?php echo IMGPATH; ?>search.png" type="submit"/>
                </form>

            </div>
            <!-- <div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
			</div> -->
        </div>
    </div>
</div>







