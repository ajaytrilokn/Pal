<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<title><?php wp_title(); ?></title>

		<!-- ================ /GOOGLE FONT EOC =================== -->
        <?php wp_head();?>
		<style type="text/css">
			.show_hide {display:none; }
		</style>
	</head>
	<body id="home" <?php body_class('homePage'); ?>>
	<!-- ====== /WRAPPER BOC ====== -->
		<div class="page-wrapper ">
		  	<!-- header start -->
		  	<header class="site-header">
			    <div class="header-main nav-area">
			      	<div class="header-inner-main">
			      		<div class="container">
				          	<div class="navbar-container">

					            <nav class="navbar navbar-dark navbar-expand-lg">
					                <div class="header-logo">
					                	<?php
                                        if ( function_exists( 'the_custom_logo' ) ) {
                                            the_custom_logo();
                                        }
                                        ;?>
					              	</div>
					              	<div class="header-inner d-flex">
						                <div class="header-right">
							                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                    <span class="icon-bar"></span>
							                </button>

						                    <div class="collapse header-menu navbar-collapse " id="navbarNavDropdown">
						                      <div class="header-menu-inner">
												<?php
												wp_nav_menu(array(
													'theme_location'=>'primary',
													'container' => false,
													'menu_class' => 'navbar-nav',
													'add_li_class'  => 'nav-item',
													'link_class'    => 'nav-link'
												))
												;?>
						                        <div class="header-btn">
						                        	<a href="#" class="btn btn-border">Login</a>
						                        	<a href="#" class="btn">Register</a>
						                        </div>

						                      </div>
						                    </div>
						                </div>
						            </div>
					            </nav>
				            </div>
			            </div>
			        </div>
			    </div>
		  	</header> 
			<!-- header End -->
			<!-- Content Start -->