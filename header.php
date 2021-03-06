<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package madison
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site madison-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'madison' ); ?></a>

	<header id="masthead" class="site-header madison-header mdl-layout__header mdl-color--blue-grey-900 mdl-color-text--blue-grey-50" role="banner">
		<div class="site-branding mdl-layout__header-row">
			<span class="site-title mdl-layout-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
          <div class="mdl-layout-spacer"></div>
       <!--   <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search" />
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div> -->
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn2">
            <i class="material-icons">&#xE88F;</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn2">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>

          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">&#xE7FD;</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>

          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn1">
            <i class="material-icons">&#xE8CC;</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn1">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul> 

          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn3">
            <i class="material-icons">&#xE80D;</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn3">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul> 

        </div>     
    </header>
      <div class="madison-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="madison-drawer-header">
          <!-- <img src="//45.55.205.177/wp-content/uploads/2015/07/wpguru4u.jpg" class="madison-avatar"> -->
 <!--          <div class="madison-avatar-dropdown">
           <span>hello@example.com</span>
            <div class="mdl-layout-spacer"></div>
            <button id="accbtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
              <i class="material-icons" role="presentation">arrow_drop_down</i>
              <span class="visuallyhidden">Accounts</span>
            </button>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">
              <li class="mdl-menu__item">hello@example.com</li>
              <li class="mdl-menu__item">info@example.com</li>
              <li class="mdl-menu__item"><i class="material-icons">add</i>Add another account...</li>
            </ul> 

          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="accbtn">
            <i class="material-icons">&#xE7FD;</i>
          </button>
 
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="accbtn1">
            <i class="material-icons">&#xE8CC;</i>
          </button>

          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="accbtn3">
            <i class="material-icons">&#xE80D;</i>
          </button>
           
          </div> -->
        </header>
        <?php 
        wp_nav_menu( 
        	array( 
            'theme_location' 	=> 'primary',
            'container'			  => 'nav',
            'container_class'	=> 'madison-navigation mdl-navigation mdl-color--blue-grey-800',
            'items_wrap'      => '%3$s',
            'walker'          => new madison_drawer_walker_nav_menu()
        		) 
        	); 
        ?>

        <nav class="madison-navigation mdl-navigation mdl-color--blue-grey-800">
		  <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a>
          <div class="mdl-layout-spacer"></div>
          <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i><span class="visuallyhidden">Help</span></a>
        </nav>
      </div>    
      <main class="mdl-layout__content mdl-color--grey-100">
      <!-- <div id="content" class="madison-content mdl-grid mdl-grid--no-spacing"> -->
      <div id="content" class="madison-content mdl-grid m-npom">
