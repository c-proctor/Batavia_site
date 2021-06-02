<?php get_header(); /* Tells WordPress to include header.php */ ?>
    <section class="container-fluid aboutbg">
        <!--displays at large screen size-->
        <div class="container about-lg">
            <div class="row">
                <div class="col-md-6 aboutdiv">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=4');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
                </div>
                <div class="col-md-6">
                </div>
            </div>
        </div>

        <!--displays at 425px screen size-->
        <div class="container about-sm">
            <div class="aboutdiv">
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=4');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>
            </div>
        </div>
    </section>

    <section class="container-fluid discoverbg">
        <div class="container">
            <div class="row">
                <div>
                    <h3 class="text-center">DISCOVER THE BATAVIA</h3>
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