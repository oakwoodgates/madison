<?php
/**
 * Adds Foo_Widget widget.
 */

class WPG_Ongoing_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wpg_ongoing_widget', // Base ID
			__( 'Ongoing Widget', 'text_domain' ), // Name
			array( 'description' => __( 'An Ongoing Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
	//	echo $args['before_widget'];
		?>
<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing"><h2>We can help with&hellip;</h2></div>

<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing w100 m-npom mdl-shadow--4dp service-pillars">		

<aside class="mdl-cell mdl-cell--8-col mdl-cell--6-col-desktop mdl-card mdl-color--blue-100 consultation-widget">	
	<header class="widget-header mdl-card__title">
		<h3 class="widget-title">Consultations</h3>
	</header>
	<div class="callout-icon">
		<i class="material-icons mdl-color-text--blue-50">&#xE61D;</i>
	</div>
	<div class="widget-content mdl-card__supporting-text mdl-card--expand">
		<div class="subtitle">Your questions, answered</div>
		<ul>
			<li>problem solving</li>
			<li>options &amp; planning</li>
			<li>project management</li>
			<li>training &amp; assistance</li>
		</ul>
		<div class="foottitle">Unbiased advice &amp; solutions for your small business problems</div>
	</div>
	<div class="mdl-card__actions">
	    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--blue-300" href="">Let's Chat</a>
	</div>
</aside>

<aside class="mdl-cell mdl-cell--8-col mdl-cell--6-col-desktop mdl-card mdl-color--green-100 microtasking-widget">	
	<header class="widget-header mdl-card__title">
		<h3 class="widget-title">Microtasking</h3>
	</header>
	<div class="callout-icon">
		<i class="material-icons mdl-color-text--green-50">&#xE8B8;</i>
	</div>
	<div class="widget-content mdl-card__supporting-text mdl-card--expand">
		<div class="subtitle">Your task list, done</div>
		<ul>
			<li>theme &amp; template customizations</li>
			<li>plugin setups</li>
			<li>front &amp; backend forms</li>
			<li>bug fixes</li>
		</ul>
		<div class="foottitle">Check out our basic services or<br /><a href="http://fiverr.com/wpguru4u/">take us for a test drive on fiverr</a></div>
	</div>
	<div class="mdl-card__actions">
	    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--green-300" href="">View Services</a>
	</div>
</aside>

<aside class="mdl-cell mdl-cell--8-col mdl-cell--5-col-desktop mdl-card mdl-color--orange-100 support-widget">	
	<header class="widget-header mdl-card__title">
		<h3 class="widget-title">Support &amp; Management</h3>
	</header>
	<div class="callout-icon">
		<i class="material-icons mdl-color-text--orange-50">&#xE8E5;</i>
	</div>
	<div class="widget-content mdl-card__supporting-text mdl-card--expand">
		<div class="subtitle">Your goals, managed</div>
		<ul>
			<li>content &amp; design changes</li>
			<li>general maintenance &amp; support</li>									
			<li>growth focused development</li>
			<li>priority turnaround time</li>
		</ul>
		<div class="foottitle">weekly, biweekly, and monthly packages available</div>
	</div>
	<div class="mdl-card__actions">
	    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--orange-300" href="">Sign Up</a>
	</div>
</aside>

<aside class="mdl-cell mdl-cell--8-col mdl-cell--7-col-desktop mdl-card mdl-color--blue-grey-200 development-widget">	
	<header class="widget-header mdl-card__title">
		<h3 class="widget-title">Custom Development</h3>
	</header>
	<div class="callout-icon">
		<i class="material-icons mdl-color-text--blue-grey-100">&#xE869;</i>
	</div>
	<div class="widget-content mdl-card__supporting-text mdl-card--expand">
		<div class="subtitle">Your problems, solved</div>
		<ul>
			<li>theme &amp; template development</li>
			<li>frontend design</li>
			<li>plugin development</li>
			<li>goal oriented strategy &amp; solutions</li>
		</ul>
		<div class="foottitle">code to solve your problems &amp; achieve your goals</div>
	</div>
	<div class="mdl-card__actions">
	    <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-color--blue-grey-400" href="">Get Started</a>
	</div>
</aside>

<aside class="mdl-cell mdl-cell--12-col mdl-card mdl-color--blue-grey-500 final-widget">	
	<header class="widget-header mdl-card__title">
		<h3 class="widget-title">Help for Your Business</h3>
	</header>
	<div class="callout-icon">
		<i class="material-icons mdl-color-text--blue-grey-600">&#xE0AF;</i>
	</div>
	<div class="widget-content mdl-card__supporting-text mdl-card--expand">
		<div class="subtitle">Your on demand WordPress Guru, WPguru4u!</div>
		<br />
		<ul>
			<li>solutions to fit your budget and grow with your business</li>
		</ul>
		<div class="foottitle">let's build something awesome</div>
	</div>
	<div class="mdl-card__actions">
	    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--red-300" href="">Contact WPguru4u</a>
	</div>
</aside>

</div><?php
	}

}
