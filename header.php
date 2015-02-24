

<div id="ctf-top-bar1">
	<div id="ctg-main-header">
		<div id="ctf-logo-area">
			<a href="<?php echo esc_url( home_url( '/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display'));?>"><img src="http://www.tempze.com/wp-content/uploads/2015/01/cropped-Tempze.png" alt="Logo" width="300px" height="85px" /> </a>
		</div>

		<div id="ctf-main-menus">
			<nav id="navcontainer">
				<?php wp_nav_menu( array( 'theme_location' => 'top', 'sort_column' => 'menu_order', 'container' => 'menu-header', 'fallback_cb' => 'default_top_nav' ) ); ?>
			</nav>
		</div>
	</div>
</div>
        <?php 
if ( is_front_page() ) { ?>
        <div class="nw-header">
            <?php 

// Revolution slider function 
if (get_option('enable_slider') =='Enable') { 

 $slideralias =  get_option('slider_alias') ;

if(function_exists('putRevSlider')) {
putRevSlider("$slideralias");
} else {
	} 
		} else { }?>
        </div>
        <div class="header-buttons">
            <ul>
                <li class="buttona">
                    <?php /* echo sprintf( __( '
                    <a href="%s">'.get_option('button1_text').'</a>', APP_TD ), esc_url( get_the_hrb_project_create_url() ) ); ?>
                                </li>
                <?php

// buttona work previous class custom -how it works- page.
$linkpage = get_option('how_it_works');
if (get_option('enable_button2') == 'false'): ?>

                <li class="buttona"> 
                    <a href="
                        <?php echo get_permalink( get_page_by_path( "$linkpage" ) ) ?>">
                        <?php echo get_option('button2_text'); ?>
                    </a>
                </li>
                <?php endif;*/?>
            </ul>
        </div>
        <?php	} else { ?>
        <div class="content-headers">
            <div class="row">
           
				<?php 		
				do_action( 'hrb_content_container_tops' );
			
				?>
				
			
				
                  
              
            </div>
        </div>
        <?php }	?>
        <div class="nw-header-after"></div>
		
        <div class="full-width">
            <div class="row">
                <?php 

// Show/hide menu : optional
if (get_option('enable_menu') =='Show') { ?>

                    <section class="">
                        <!-- mainNav Section -->
                        <div class="primario">
					
                          
                      
					  		<div class="left">
					
							
							<nav class="top-bar">
								<ul class="title-area">
					<!-- Title Area -->
							<li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
				</ul>
                                  <?php the_nw_nav_menu(); ?>
                                </nav>  
	
							
							
					 		
						</div>	
					
					  
						   <?php if ( $hrb_options->categories_menu['show'] && ! is_page_template('categories-list-project.php') ): ?>
                            <!-- optional category lists -->
                            <div class="catosa 
                                <?php echo ( 'click' == $hrb_options->categories_menu['show'] && ! wp_is_mobile() ? 'click-cat-menu' : '' ); ?>">
                                <a class="dynamic-cat-menu" href="">
                                    <?php if( !get_option ('txt_categories')) { echo"Categories";} else { echo stripslashes(get_option('txt_categories')); } ?>
                                </a>
                                
                            </div>
                            <?php endif; ?>
                        </div>
						
						
						
						
						
			
					  
					 
						
						
                    </section>
                
                <?php } ?>
                <div class="row">
                    <?php if ( ( 'front' == $hrb_options->custom_header_vis && is_front_page() ) || 'any' == $hrb_options->custom_header_vis ): ?>
                    <!-- widgetized area below navbar -->
                    <?php hrb_display_ad_sidebar( 'hrb-header-nav', $position = 'inside' ); ?>
                    <?php endif; ?>
                    <?php if ( $hrb_options->categories_menu['show'] && ! is_page_template('categories-list-project.php') ): ?>
                    <!-- optional category lists -->
                    <div class="row category-row categories-menu 
                        <?php echo ( 'click' == $hrb_options->categories_menu['show'] && ! wp_is_mobile() ? 'click-cat-menu' : '' ); ?>">
                        <div class="large-12 columns">
                        
                            <?php the_hrb_project_categories_list('categories_menu'); ?>
                            
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
				
				
				
				
			
			
			 <?php	
			 //Enable the featured projects slider
			 
			 if (get_option('enable_ftslider') =='Enable') {   ?>
				
				
				
				<?php if ( is_front_page() ) { ?>
					<div class="featuro">
						<?php echo nw_loop_projects();  ?>
				
					<div class="clear"></div>
					</div>

				<?php  } else {} ?>

			
			 <?php } ?>
			
			
			
        </div>
      
        <!-- end row -->
	
		
<script>
	// no conflict
	var $zzz = jQuery.noConflict();
	// Use jQuery via $zz(...)
	$zzz(document).ready(function(){
	});
	
	
	
</script>


    <script type="text/javascript">
        $zzz(function() {
            $zzz(".banner .viewport").jCarouselLite({
                btnNext: ".nexto",
        		btnPrev: ".prevo",
        		visible: 5,
				pause: true,
				auto: true,
				timeout: 5000,
				speed: 1300,
            });
        });
    </script>
	
	
	
