<?php
    /*
    Template Name: Accessibility
    */
?>
<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?>
    <section class="container-fluid services-head">
    </section>

    <section class="container-fluid opening-hours">
        <div class="container opening-lg">
            <h8><?php the_field('titleforopeninghours'); ?></h8>
            <div class="row">
                <div class="col-sm-3 col-xs-3">
                    <ul class="normal-days">
                        <li><b>DAY</b></li>
                        <li>Monday</li>
                        <li>Tuesday</li>
                        <li>Wednesday</li>
                        <li>Thursday</li>
                        <li>Friday</li>
                        <li>Saturday</li>
                        <li>Sunday</li>
                    </ul>
                    <ul class="special-days">
                        <li>ANZAC Day</li>
                        <li>Christmas Day</li>
                        <li>Boxing Day</li>
                        <li>New Year's Day</li>
                        <li>Good Friday</li>
                    </ul>
                </div>
                <div class="col-sm-3 col-xs-3">
                    <ul class="normal-days">
                        <li><b>OPENING HOURS</b></li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                    </ul>
                    <ul class="special-days">
                        <li>1.00pm - 5.00pm</li>
                        <li>Closed</li>
                        <li>Closed</li>
                        <li>Closed</li>
                        <li>Closed</li>
                    </ul>
                </div>
                <div class="col-xs-6">
                </div>
            </div>
        </div>

        <div class="container opening-sm">
            <h8>Opening Hours</h8>
            <div class="row">
                <div class="col-xs-6">
                    <ul class="normal-days">
                        <li><b>DAY</b></li>
                        <li>Monday</li>
                        <li>Tuesday</li>
                        <li>Wednesday</li>
                        <li>Thursday</li>
                        <li>Friday</li>
                        <li>Saturday</li>
                        <li>Sunday</li>
                    </ul>
                    <ul class="special-days">
                        <li>ANZAC Day</li>
                        <li>Christmas Day</li>
                        <li>Boxing Day</li>
                        <li>New Year's Day</li>
                        <li>Good Friday</li>
                    </ul>
                </div>
                <div class="col-xs-6">
                    <ul class="normal-days">
                        <li><b>OPENING HOURS</b></li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                        <li>9.30am - 5.00pm</li>
                    </ul>
                    <ul class="special-days">
                        <li>1.00pm - 5.00pm</li>
                        <li>Closed</li>
                        <li>Closed</li>
                        <li>Closed</li>
                        <li>Closed</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid getting-here">
        <div class="container">
            <h8><?php the_field('titleforgettinghere'); ?></h8>
            <div class="getting-here-map text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.4405397360224!2d115.74053151570227!3d-32.057331434753905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32a171ad35d0b3%3A0xcd18ab60710a3de8!2sWA%20Shipwrecks%20Museum!5e0!3m2!1sen!2sau!4v1619589483222!5m2!1sen!2sau" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="row">
                <div class="col-md-4 address">
                    <h9><?php the_field('titleforaddress'); ?></h9>
                    <p><?php the_field('placename'); ?></p>
                    <br>
                    <p><?php the_field('addresscontent'); ?></p>
                    <!--
                    <p>WA Shipwrecks Museum</p>
                    <br>
                    <p>Cliff Street<br>Fremantle,<br>Western Australia<br>6160,<br>Australia</p>
                    -->
                    <h9><?php the_field('titleforphone'); ?></h9>
                    <p><?php the_field('paragraphforphonenumber'); ?></p>
                </div>
                <div class="col-md-8 transport">
                    <h9><?php the_field('titlefortransport1'); ?></h9>
                    <p><?php the_field('paragraphfortransport1'); ?></p>
                    <h9><?php the_field('titlefortransport2'); ?></h9>
                    <p><?php the_field('paragraphfortransport2'); ?></p>
                    <h9><?php the_field('titlefortransport3'); ?></h9>
                    <p><?php the_field('paragraphfortransport3'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid accessibility">
        <div class="container">
            <h8><?php the_field('titleforaccessibility'); ?></h8>
            <div class="accessibility-list">
                <p><?php the_field('accesscontent'); ?></p>
            </div>
        </div>
    </section>

    <section class="container-fluid site-map">
        <div class="container">
            <h8><?php the_field('titleforsitemap'); ?></h8>
            <div class="site-map-map text-center map-h">
                <img class="img-responsive" alt="map" src="http://206.189.45.97/~mesh20/sub1/wp-content/themes/batavia_site/images/sitemap-h.jpg">
            </div>
            <div class="site-map-map text-center map-v">
                <img class="img-responsive" alt="map" src="http://206.189.45.97/~mesh20/sub1/wp-content/themes/batavia_site/images/sitemap-v.jpg">
            </div>
            <h10>KEY</h10>
            <div class="row">
                <div class="col-md-6 key-list">
                    <p><?php the_field('sitemaplist1'); ?></p>
                </div>
                <div class="col-md-6 key-list">
                    <p><?php the_field('sitemaplist2'); ?></p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>