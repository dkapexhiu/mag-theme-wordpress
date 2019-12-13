<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

get_header();
?>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <?php if(function_exists('bcn_display'))
                        { ?>
                           <h2><?php bcn_display(); ?></h2>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <?php if(function_exists('bcn_display'))
                            {
                                bcn_display();
                            }?>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area">
			<?php

			/* Start the Loop */
			while ( have_posts() ) : 
				the_post(); ?>  
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area bg-white mb-30 box-shadow">
                        <?php the_post_thumbnail()?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8">
             	
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow">
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#"><?php the_time('d F Y'); ?></a>
                                <a href="#"><?php the_category(', '); ?></a>
                            </div>
                            <h4 class="post-title"><?php the_title(); ?></h4>

                            <p><?php the_content(); ?></p>
                               
                            <!-- Like Dislike Share -->
                            <div class="like-dislike-share my-5">
                            	<div class="sharethis-inline-share-buttons"></div>
                            </div>

                        </div>
                    </div>



                    <!-- Related Post Area -->
                    <div class="related-post-area bg-white mb-30 px-30 pt-30 pb-0 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Postime te ngjashme</h5>
                        </div>

                        <div class="row">
			                <!-- Single Blog Post -->
			                <?php  if(is_active_sidebar('sidebar-recent-posts')) : ?>
			                  <?php  dynamic_sidebar('sidebar-recent-posts'); ?>
			                <?php endif; ?>
                        </div>
                    </div>

                </div>

                <!-- Sidebar Widget -->
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <?php  if(is_active_sidebar('sidebar')) : ?>
                              <?php  dynamic_sidebar('sidebar'); ?>
                            <?php endif; ?>     
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/add2.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
            <?php
			endwhile; // End of the loop.
			?>
    </section>
    <!-- ##### Post Details Area End ##### -->    

<?php
get_footer();