<?php
/**
 * The template for displaying search
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

<section id="search">
        <div class="container-fluid">
            <div class="row">

    <!-- Inizio degli articoli del blog -->
<div class="col-sm-12 col-md-8 col-lg-8">
  <h2>Rezultatet e Kerkimeve: </h2>

<?php if(have_posts() ) : while(have_posts() ) : the_post(); ?>


<div class="meta-data  my-4">
  <h3 class="bg-primary mt-5"><a class="white" href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h3>
<p class="meta-text pl-4">
<i class="fas fa-user 2x"></i>  <span><b>Artikull i krijuar nga:</b> <i><?php echo the_author_posts_link(); ?></i></span>
  <i class="fas fa-clock 2x"></i> <span><b>me: </b><i><?php echo the_time('d - m - Y'); ?></i></span>
</p>
<p class="meta-text pl-4">
  <i class="fas fa-tags"></i><span> <?php echo the_tags('<b>me tag:</b> ' , '|' , ' #'); ?></span>
<i class="fas fa-archive"></i><span><b>kategori:</b><?php echo get_the_category_list(', '); ?></span>
</p>
</div>

<div class="media">
  <!-- <img class="mr-3" src="img/thumb.jpg"> -->
  <div class="media-body m-4">
    <?php echo the_post_thumbnail('thumbnail'); the_excerpt(); ?>
    <span class="btn btn-primary btn-sm"><a class="white" href="<?php the_permalink(); ?>">Lexo me teper...</a></span>
  </div>
</div>

<?php  endwhile; else: ?>
  <h3 class="ml-5"><?php echo 'Me vjen keq, nuk ka rezultate me ate fjale kyce: <b>'  . get_search_query() . '</b>. <br>Provo me nje tjeter fjale kyce'; ?> </h3>

<?php endif; ?>

<!-- Paginazione -->

<nav>
  <ul class="pagination pagination-sm justify-content-center my-5">
    <li class="page-item">
<?php echo paginate_links( array (
  'show_all'           => false,
  'prev_next'          => true,
  'type'               => 'plain',
  'prev_text'          => __('<i class="fas fa-chevron-circle-left"></i>'),
  'next_text'          => __('<i class="fas fa-chevron-circle-right"></i>'),
  'before_page_number' => '<b>faqe</b> ',
  'after_page_number'  => ' <i class="fas fa-book"></i>'


)); ?>
</li>
</ul>
</nav>

</div>

<hr>


  </div>
</div>
</section>  

<?php
get_footer();