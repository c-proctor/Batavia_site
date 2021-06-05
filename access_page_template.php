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
                    <p>WA Shipwrecks Museum</p>
                    <br>
                    <p>Cliff Street<br>Fremantle,<br>Western Australia<br>6160,<br>Australia</p>
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
                <h9>Access within Museum</h9>
                <p>Ramp and lift available for disabled access. Automatic doors to galleries.</p>
                <h9>ACROD Parking</h9>
                <p>Wilsons car park $1.80/hr<br>2 bays in front of museum and 1 bay on Slip Street.<br>Level and ramp access to the Museum entrance.</p>
                <h9>Audio Guides</h9>
                <p>Not available.</p>
                <h9>Captioning</h9>
                <p>Most interactives have captions.</p>
                <h9>Contact</h9>
                <p>For groups of 10 or more, please contact 1300 134 081.</p>
                <h9>Drop Off Area</h9>
                <p>One bay front of Museum. Ramp to footpath.</p>
                <h9>Entry to Museum</h9>
                <p>Approximately 30 meters level path to Museum entrance which has self-opening doors.<br>There is one entry to the Museum.</p>
                <h9>Equipment Available</h9>
                <p>One wheelchair available for use.</p>
                <h9>Hearing Loops</h9>
                <p>No hearing loops available.</p>
                <h9>Reception</h9>
                <p>Entry foyer immediately inside self-opening entry door.</p>
                <h9>Toilets</h9>
                <p>Unisex disability access toilet available on the ground floor.</p>
                <h9>Touch Trolleys</h9>
                <p>Tactiles entrance on all stairs.<br>Touch trolleys available during school holidays and special exhibitions for all Museum visitors.<br>Specialised tours have been organised for people with a range of disabilities.</p>
                <h9>Trained Guide or Assistance Dogs</h9>
                <p>Visitors accompanied by a Trained Guide or Assistance Dog or a dog undergoing such training are welcome in this site.</p>
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
                <div class="col-md-6">
                    <ul class="key-list">
                        <li>1. Entrance Gallery</li>
                        <li>2. Museum Shop</li>
                        <li>3. Hartog to de Vlamingh Gallery</li>
                        <li>4. Xantho Gallery</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="key-list">
                        <li>5. Corridor Displays</li>
                        <li>6. Batavia Gallery</li>
                        <li>7. Batavia Observation Deck</li>
                        <li>8. Dutch Wrecks Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>