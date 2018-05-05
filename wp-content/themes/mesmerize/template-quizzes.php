<?php 
	/*
	Template Name: Quiz
	*/
	?>

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


	global $wpdb;

	$currentuser = wp_get_current_user();
	if( !($currentuser instanceof WP_User))
		return;
	else{
		echo $currentuser->user_login;
		$progress_table = $wpdb->get_results('SELECT COUNT(*) FROM wp_module_progress WHERE ID =  
			"'. $currentuser->user_id .'"');
		//print_r($progress_table);
		/*if(empty($playerlist)){ 
		 	echo 'bleh';}
			$wpdb->insert(
				'wp_module_progress',
				array(
					'user_id' => $currentuser->user_id,
					'mod1' => 1,
					'mod2' => 0,
					'mod3' => 0,
					'mod4' => 0,
					'mod5' => 0,
					'mod6' => 0,
					'mod7' => 0,
					'mod8' => 0,
					'mod9' => 0
				),
				array(
					'%d',
					'%d',
					'%d',
					'%d',
					'%d',
					'%d',
					'%d',
					'%d',
					'%d',
					'%d'
				)

			);

		}
		else{
			$wpdb->update(
				'wp_module_progress',
				array('mod1' => 1),
				array('user_id' => $currentuser->ID),
				array('%d'),
				array('%d')
			);
		} 
		*/
	}


?>

<?php get_footer(); ?>
