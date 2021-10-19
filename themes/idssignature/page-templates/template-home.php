<?php
/** Template Name: Home template **/
get_header();

?>
<div id="myContainer">
    <div class="section">
			<?php
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-1.php' );
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-2.php' );
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-3.php' );
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-4.php' );
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-5.php' );
			require_once( get_template_directory() . '/template-parts/home-tabs/tab-6.php' );
			?>
    </div>
</div>
<?php
get_footer();
?>
