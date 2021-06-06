<?php
    /*
    Template Name: Discover
    */
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 
<section class="container-fluid discover-head text-center">
        <div class="container">
            <h6><?php the_field('titlefordiscover'); ?></h6>
        </div>
    </section>

    <section class="container-fluid discover-posts discover-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post1title'); ?></h7>
                    <p><?php the_field('post1paragraph1'); ?></p>
                    <p><?php the_field('post1paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=128">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <img class="img-responsive post-image" alt=“skeleton” src="<?php the_field('post1image'); ?>">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <img class="responsive post-image text-left" alt="fresco" src="<?php the_field('post2image'); ?>">
                </div>
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post2title'); ?></h7>
                    <p><?php the_field('post2paragraph1'); ?></p>
                    <p><?php the_field('post2paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=131">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post3title'); ?></h7>
                    <p><?php the_field('post3paragraph1'); ?></p>
                    <p><?php the_field('post3paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=133">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
                <div class="col-md-6 text-right">
                    <img class="responsive post-image" alt="coins" src="<?php the_field('post3image'); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid discover-posts discover-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="img-responsive post-image" alt=“skeleton” src="<?php the_field('post1image'); ?>">
                </div>
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post1title'); ?></h7>
                    <p><?php the_field('post1paragraph1'); ?></p>
                    <p><?php the_field('post1paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=128">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <img class="responsive post-image text-left" alt="fresco" src="<?php the_field('post2image'); ?>">
                </div>
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post2title'); ?></h7>
                    <p><?php the_field('post2paragraph1'); ?></p>
                    <p><?php the_field('post2paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=131">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img class="responsive post-image" alt="coins" src="<?php the_field('post3image'); ?>">
                </div>
                <div class="col-md-6 blog-padding">
                    <h7><?php the_field('post3title'); ?></h7>
                    <p><?php the_field('post3paragraph1'); ?></p>
                    <p><?php the_field('post3paragraph2'); ?></p>
                    <a href="http://206.189.45.97/~mesh20/sub1/?p=133">
                        <button type="button" class="btn btn-primary btn-sm expand">EXPAND</button>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>