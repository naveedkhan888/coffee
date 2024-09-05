<!-- #site-header-open -->
<header id="site-header" class="site-header <?php coffeee_header_class(); ?>">

    <!-- #header-desktop-open -->
    <?php coffeee_header_builder(); ?>
    <!-- #header-desktop-close -->

    <!-- #header-mobile-open -->
    <?php coffeee_mobile_builder(); ?>
    <!-- #header-mobile-close -->

</header>
<!-- #site-header-close -->
<!-- #side-panel-open -->
<?php if ( !empty( coffeee_get_option('is_sidepanel') ) && coffeee_get_option('sidepanel_layout') != '' ) { ?>
    <div id="side-panel" class="side-panel <?php if( coffeee_get_option('panel_left') ) echo 'on-left'; ?>">
        <a href="#" class="side-panel-close"><i class="xp-webicon-cancel"></i></a>
        <div class="side-panel-block">
            <?php if ( did_action( 'elementor/loaded' ) ) coffeee_sidepanel_builder(); ?>	
        </div>
    </div>
<?php } ?>
<!-- #side-panel-close -->