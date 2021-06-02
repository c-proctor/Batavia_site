<?php
    /*
    Template Name: Home page
    */
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg">
        <!--displays at large screen size-->
        <div class="container about-lg">
            <div class="row">
                <div class="col-md-6 aboutdiv">
                    <h2><?php the_field('titleforaboutbatavia'); ?></h2><!--  custom field for the aboutme content-->
                    <p class="about-text"><?php the_field('paragraphforaboutbatavia'); ?></p>
                    <p class="about-text"><?php the_field('paragraphforaboutbatavia1'); ?></p>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>

        <!--displays at 425px screen size-->
        <div class="container about-sm">
            <div class="aboutdiv">
                <h2 class="text-center"><?php the_field('titleforaboutbatavia'); ?></h2><!--  custom field for the aboutme content-->
                <p class="about-text"><?php the_field('paragraphforaboutbatavia'); ?></p>
                <p class="about-text"><?php the_field('paragraphforaboutbatavia1'); ?></p>
            </div>
        </div>
    </section>

    <section class="container-fluid discoverbg">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="text-center article-title "><?php the_field('titleforarticles'); ?></h3>
                </div>
                <div class="col-md-4">
<?php $post_id = 128;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="continue" href="'.get_permalink($queried_post).'"><br>Continue Reading</a>';?>
                </div>
                <div class="col-md-4">
<?php $post_id = 131;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="continue" href="'.get_permalink($queried_post).'"><br>Continue Reading</a>';?>
                </div>
                <div class="col-md-4">
<?php $post_id = 133;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="continue" href="'.get_permalink($queried_post).'"><br>Continue Reading</a>';?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid locationbg">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="text-center">LOCATION</h3>
                </div>
                <div class="col-md-7 map">
                    <!--map-->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.4405397360224!2d115.74053151570227!3d-32.057331434753905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a171ad35d0b3%3A0xcd18ab60710a3de8!2sWA%20Shipwrecks%20Museum!5e0!3m2!1sen!2sau!4v1619589483222!5m2!1sen!2sau" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-5 opening text-center">
                    <!--opening hours-->
                    <h5>OPENING HOURS</h5>
                    <div class="blocker"></div>
                    <ul class="hours-list">
                        <li>MONDAY</li>
                        <li>TUESDAY</li>
                        <li>WEDNESDAY</li>
                        <li>THURSDAY</li>
                        <li>FRIDAY</li>
                        <li>SATURDAY</li>
                        <li>SUNDAY</li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-sm moreinfo">MORE INFO</button>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>