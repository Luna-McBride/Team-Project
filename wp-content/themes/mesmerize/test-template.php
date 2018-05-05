<?php mesmerize_get_header(); ?>

    <div class="page-content">
        <div class="<?php mesmerize_page_content_wrapper_class(); ?>">
            <?php
            while (have_posts()) : the_post();
                get_template_part('template-parts/content', 'page');
            endwhile;
            ?>
        </div>
    </div>

<?php 
	/*
	Template Name: test
	*/
    global $wpdb;
	echo 'bleh';
    //$currentuser = wp_get_current_user();

    //echo 'bleh' .$currentuser->user_login. '<br/>';
    //$usertable = $wpdb->get_results("SELECT * FROM wp_users;");
    //print_r($usertable);


?>

<?php get_footer(); ?>
