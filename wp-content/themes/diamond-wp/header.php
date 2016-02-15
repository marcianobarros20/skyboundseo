<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">
	
    <!-- /// Favicons ////////  -->
	<?php
		$favicon = get_option(EWF_SETUP_THNAME."_favicon", get_template_directory_uri().'/layout/images/favicon.png');
		$favicon_retina = get_option(EWF_SETUP_THNAME."_favicon_retina", get_template_directory_uri().'/layout/images/apple-touch-icon-144-precomposed.png');
		
		echo '<link rel="shortcut icon" href="'.$favicon.'" />';
		echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$favicon_retina.'" />';
	?>

	<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?>> 
	
	<div id="wrap">
	
    	<div id="header-top">
        
        <!-- /// HEADER TOP  //////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        
            <div class="ewf-row">
                <div class="ewf-span6" id="header-top-widget-area-1">
				<?php
					
					if (is_active_sidebar('header-left')){
						dynamic_sidebar('header-left');
					}
					
				?>
                </div><!-- end .span6 -->

                <div class="ewf-span6" id="header-top-widget-area-2">
				<?php
					
					if (is_active_sidebar('header-right')){
						dynamic_sidebar('header-right');
					}
					
				?>
                </div><!-- end .span6 -->
            </div><!-- end .row -->
            
        <!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
            
        </div><!-- end #header-top -->
		
		<div id="header" 
			<?php 
				
				$header_extra_class = null;
				if(has_nav_menu('top-menu')){
					
				}
						
			?>
		>
		
		<!-- /// HEADER  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

			<div class="ewf-row">
				<div class="ewf-span3">
				
					<!-- // Logo // -->
					<?php 
									
						if (get_option(EWF_SETUP_THNAME."_logo_url",null) != null){
							$logo_url = get_option(EWF_SETUP_THNAME."_logo_url");
						}else{
							$logo_url = get_template_directory_uri().'/layout/images/logo.png';
						}
						
						echo '<a href="'.get_home_url().'" id="logo">
								<img class="responsive-img" src="'.$logo_url.'" alt="">
							</a><!-- end #logo -->';
							
					?>		

				</div><!-- end .span4 -->
				<div class="ewf-span9">
				
                	<a id="mobile-menu-trigger" href="#">
                    	<i class="fa fa-bars"></i>
                    </a>
										
					
					<!-- // Menu // -->
					<?php  	do_action('ewf-menu-top'); ?>
									
				</div><!-- end .span8 -->
			</div><!-- end .row -->		

		<!-- //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

		
		</div><!-- end #header -->
		<div id="content">

		<!-- /// CONTENT  //////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		
		<?php	
		
			#	Load page header
			#				
			get_template_part('framework/modules/ewf-header/templates/page-header');  
		
		?>
	