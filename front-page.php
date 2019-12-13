<?php get_header(); ?>

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
	<?php
	$latest = new WP_Query(array(
	'category_name' => 'latest',
	));
	while($latest->have_posts()){
	$latest->the_post();
	?>	   
	   <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#"><?php the_time('d F Y'); ?></a>
                                <a href="#"><?php the_category(', '); ?></a>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="post-title" data-animation="fadeInUp" data-delay="300ms"><?php the_title(); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<?php } ?>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->  
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">          
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Me te kerkuara</h5>
                </div>
                <?php
                $favorites = new WP_Query(array(
                'category_name' => 'favorites',
                ));
                while($favorites->have_posts()){
                $favorites->the_post();
                ?>  				
				<!-- Single Blog Post -->
                <div class="single-blog-post d-flex">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="post-content">
                        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                        <div class="post-meta d-flex justify-content-between">
                        </div>
                    </div>
                </div>		
                <?php } ?>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="<?php echo get_template_directory_uri(); ?>/img/bg-img/add.png" alt=""></a>
            </div>
            
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Trendet e fundit</h5>
                </div>
				<div class="trending-post-slides owl-carousel">
                <?php
                $latest = new WP_Query(array(
                'category_name' => 'latest',
                ));
                while($latest->have_posts()){
                $latest->the_post();
                ?>  				
				<!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <?php the_post_thumbnail(); ?>
                        <div class="post-content">
                            <a href="#" class="post-cata"><?php the_category(', '); ?></a><br>
                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>

            <!-- Most Viewed Videos -->
            <div class="most-viewed-videos mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Tech & Internet</h5>
                </div>

                <div class="most-viewed-videos-slide owl-carousel">
                <?php
                $technology = new WP_Query(array(
                'category_name' => 'teknologji',
                ));
                while($technology->have_posts()){
                $technology->the_post();
                ?>
				<!-- Single Blog Post -->
                    <div class="single-blog-post style-4">
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(array(354, 354)); ?>
                        </div>
                        <div class="post-content">
                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                        </div>
                    </div>		
                <?php } ?>
                </div>  
            </div>

            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Siguri</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                <?php
                $security = new WP_Query(array(
                'category_name' => 'siguri',
                ));
                while($security->have_posts()){
                $security->the_post();
                ?>  				
				<!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <?php the_post_thumbnail(array(354, 354)); ?>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><?php the_time('d F Y'); ?></a>
                                <a href="#"><?php the_category(', '); ?></a>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
							<p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php } ?>  
                </div>
                  
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
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
    </section>
    <!-- ##### Mag Posts Area End ##### -->

 <?php get_footer(); ?>