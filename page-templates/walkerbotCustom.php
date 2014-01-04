<?php

/*
Template Name: walkerbot-custom
*/


function team_styles() {
    if ( is_front_page() )
    wp_enqueue_style( 'team-template', get_stylesheet_directory_uri() . '/walkerbot.css' );
}
add_action( 'wp_enqueue_scripts', 'team_styles', 101 );


wp_head();
?>


    <div class="lnd-container">
        <div class="lnd-header">
            <div class="lnd-header-inner">
                <div class="lnd-header-logo"></div>
                <div class="lnd-header-title">
                    <?php $background = of_get_option('logo');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
                </div>
                <div class="lnd-header-menu">
                    <div class="lnd-menu-item">order</div>
                    <div class="lnd-menu-item">specs</div>
                    <div class="lnd-menu-item">about</div>
                    <div class="lnd-menu-item">faq</div>
                </div>
            </div>
        </div>
        <div class="lnd-section section-banner">
            <div class="section-banner-image-container">
            <?php $background = of_get_option('section_one_image');
                if ($background) {
                    if ($background['image']) {
                        echo '<img src="'.$background['image'].'">';
                    }
                }
            ?>
            </div>

            <div class="title1">AFFORDABLLE & CUSTOM</div>
            <div class="title2">TANK TREADS</div>
            <div class="title3">FOR CREATORS, MAKERS, AND HOBBYISTS</div>
            <div class="order-button">ORDER NOW</div>
        </div>
        <div class="lnd-section section-about">
            <?php echo of_get_option('section_one_desc', 'description for section one is going to come here'); ?>
        </div>
        <div class="lnd-section section-specs">
            <div class="title">
                <?php echo of_get_option('section_two_title', 'section two title'); ?>
            </div>
            <div class="sub">
                <?php echo of_get_option('section_two_sub', 'section two sub'); ?>
            </div>
            <div class="main-image-holder">
                <?php $background = of_get_option('section_two_image');
                    if ($background) {
                        if ($background['image']) {
                            echo '<img src="'.$background['image'].'">';
                        }
                    }
                ?>
            </div>
            <div class="spec-section">
                <div class="spec-image-holder">
                    <?php $background = of_get_option('specification_one_image');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
                </div>
                <div class="spec-text">
                    <?php echo of_get_option('specification_one_desc', 'specification one description'); ?>
                </div>
            </div>
            <div class="spec-section">
                <div class="spec-image-holder">
                    <?php $background = of_get_option('specification_two_image');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
                </div>
                <div class="spec-text">
                    <?php echo of_get_option('specification_two_desc', 'specification two description'); ?>
                </div>
            </div>
            <div class="spec-section">
                <div class="spec-image-holder">
                    <?php $background = of_get_option('specification_three_image');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
                </div>
                <div class="spec-text">
                    <?php echo of_get_option('specification_three_desc', 'specification three description'); ?>
                </div>
            </div>
            <div class="spec-section">
                <div class="spec-image-holder">
                    <?php $background = of_get_option('specification_four_image');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
                </div>
                <div class="spec-text">
                    <?php echo of_get_option('specification_four_desc', 'specification four description'); ?>
                </div>
            </div>

            <div class="spec-action-container">
                <div class="information-text">
                    <span>Click here for more information.</span>
                </div>
            </div>
        </div>
        <div class="lnd-section section-pricing">
            <div class="title">Start Creating Today</div>
            <div class="image-holder">
                    <?php $background = of_get_option('pricing_section_image');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
            </div>
            <div class="pricing-table">
                <div class="pricing-table-header">
                    <div class="pricing-table-header-item">BASIC</div>
                    <div class="pricing-table-header-item">SUPER</div>
                    <div class="pricing-table-header-item">PREMIUM</div>
                </div>
                <div class="pricing-table-label">
                    <div class="pricing-table-label-item">$
                        <?php echo of_get_option('pricing_basic_cost', 'basic cost price'); ?>
                    </div>
                    <div class="pricing-table-label-item">$
                        <?php echo of_get_option('pricing_super_cost', 'super cost price'); ?>
                    </div>
                    <div class="pricing-table-label-item">$
                        <?php echo of_get_option('pricing_premium_cost', 'PREMIUM cost price'); ?>
                    </div>
                </div>
                <div class="pricing-table-desc">
                    <div class="pricing-table-desc-item">
                        <p>Includes : </p>
                        <p>
                            <?php echo of_get_option('pricing_basic_desc', 'pricing basic desc'); ?>
                        </p>
                    </div>
                    <div class="pricing-table-desc-item">
                        <p>Includes : </p>
                        <p>
                            <?php echo of_get_option('pricing_super_desc', 'pricing super desc'); ?>
                        </p>
                    </div>
                    <div class="pricing-table-desc-item">
                        <p>Includes : </p>
                        <p>
                            <?php echo of_get_option('pricing_premium_desc', 'pricing premium desc'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="label-text">
                Choose the best package for your project.
            </div>
            <div class="action-button">
                <div class="order-button">ORDER NOW</div>
                <div class="order-button">ORDER NOW</div>
                <div class="order-button">ORDER NOW</div>
            </div>
        </div>
        <div class="lnd-footer">
            <div class="lnd-footer-logo-container">
                    <?php $background = of_get_option('logo_symbol');
                        if ($background) {
                            if ($background['image']) {
                                echo '<img src="'.$background['image'].'">';
                            }
                        }
                    ?>
            </div>
            <div class="lnd-footer-text">
                All WALKERBOT tank treads are manufactured and produced in Washington, DC, USA.
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/less.js"></script>
