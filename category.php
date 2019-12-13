<?php
/**
 * A Simple Category Template
 *
 * 
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

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

						<?php 
						// Check if there are any posts to display
						if ( have_posts() ) : ?>

						<?php
						// Display optional category description
						 if ( category_description() ) : ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
						<?php endif; ?>	

						<?php
						 
						// The Loop
						while ( have_posts() ) : the_post(); ?>

                        <!-- Single Catagory Post -->
                        <div class="single-catagory-post d-flex flex-wrap">
                            <!-- Thumbnail -->
                            <div class="post-thumbnail bg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                                <a href="<?php the_permalink() ?>" class="video-play"></a>
                            </div>

                            <!-- Post Contetnt -->
                            <div class="post-content">
                                <div class="post-meta">
                                    <?php the_time('F jS, Y') ?>
                                    <?php the_category(', '); ?>
                                </div>
                                <a href="<?php the_permalink() ?>" class="post-title"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                            </div>
                        </div>

						<?php endwhile; 
						 
						else: ?>
						<p>Me vjen keq, nuk ka postime per kete kategori.</p>
						 
						 
						<?php endif; ?>
                    </div>
                </div>

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
                            <a href="#" class="add-img"><img src="img/bg-img/add2.png" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->

<?php
get_footer();