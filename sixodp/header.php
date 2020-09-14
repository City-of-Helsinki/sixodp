<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="https://use.fontawesome.com/4f2a9d3d3d.js"></script>
	<link rel="stylesheet" href="<?php echo site_url(); ?>/wp-content/themes/sixodp/app.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript">
		var locale = '<?php echo get_current_locale() ?>';
		var locale_ckan = '<?php echo get_current_locale_ckan() ?>';
	</script>
	<link rel="shortcut icon" href="/assets/images/favicon.ico" />
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-W9PV285');</script>
    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for hri.fi -->
    <script> (function(h,o,t,j,a,r){ h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)}; h._hjSettings={hjid:729166,hjsv:6}; a=o.getElementsByTagName('head')[0]; r=o.createElement('script');r.async=1; r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv; a.appendChild(r); })(window,document,'static.hotjar.com/c/hotjar-','.js?sv='); </script>
</head>

<body <?php body_class(); ?> id="wordpress-indicator">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9PV285"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <div id="mobile-indicator"></div>
  <?php $notifications = get_posts(array('post_type' => 'notification')); ?>
  <?php $extra_classes = count($notifications) > 0 ? ' has-notification' : '' ?>
  <div class="nav-wrapper<?php echo $extra_classes ?>">

      <?php $notifications = get_posts(array('post_type' => 'notification')); ?>
    <?php if ( count($notifications) > 0 && ($notifications[0]->post_title !== '' || $notifications[0]->post_content !== '') ) : ?>
      <?php
        $type = get_post_meta( $notifications[0]->ID, 'type', true );
        // Check if the custom field has a value.
        $notificationclass = '';
        if ( ! empty( $type ) ) {
            $notificationclass = $type;
        }
      ?>

      <div class="notification <?php echo $notificationclass; ?>">
        <p class="notification-content">
          <i class="fa fa-exclamation-circle"></i>
          <?php foreach (get_posts(array('post_type' => 'notification')) as $notification) : ?>
          <span class="bold"><?php echo $notification->post_title; ?></span>
            <?php echo $notification->post_content; ?>
          <?php endforeach; ?>
        </p>
      </div>
    <?php endif; ?>

    <?php require_once('partials/nav.php'); ?>
  </div>

  <div class="logos" role="banner">
    <span class="logos-links desktop-only">
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Helsinki">Helsinki</a>
      <span class="logos-separator">&#8226;</span>
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Espoo">Espoo</a>
    </span>
      <img src="<?php echo assets_url(); ?>/images/hero_logo.png"  alt="<?php _e('Home', 'sixodp') ?>"/>
    <span class="logos-links desktop-only">
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Vantaa">Vantaa</a>
      <span class="logos-separator">&#8226;</span>
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Kauniainen">Kauniainen</a>
    </span>
    <div class="mobile-only">
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Helsinki">Helsinki</a>
      <span class="logos-separator">&#8226;</span>
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Espoo">Espoo</a>
      <span class="logos-separator">&#8226;</span>
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Vantaa">Vantaa</a>
      <span class="logos-separator">&#8226;</span>
      <a class="logos-link" href="<?php echo CKAN_BASE_URL; ?>/<?php echo get_current_locale_ckan(); ?>/dataset?vocab_geographical_coverage=Kauniainen">Kauniainen</a>
    </div>
  </div>