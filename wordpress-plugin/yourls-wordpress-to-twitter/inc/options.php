<?php

function wp_ozh_yourls_add_page() {
	add_options_page('YOURLS: WordPress to Twitter', 'YOURLS', 'manage_options', 'ozh_yourls', 'wp_ozh_yourls_do_page');
}


function wp_ozh_yourls_do_page() {
	?>
	<div class="wrap">
	<h2>Your Plugin Name</h2>

	<form method="post" action="options.php">
	<?php settings_fields('wp_ozh_yourls_options'); ?>

	<?php
	echo "<pre>";
	var_dump($_POST);
	echo "</pre>";
	?>
	

	<table class="form-table">

	<tr valign="top">
	<th scope="row">Posts</th>
	<td><input type="hidden" value="0" name="ozh_yourls[do_posts]"/>
	<input name="ozh_yourls[do_posts]" id="ozh_yourls_do_posts" type="checkbox" value="1" <?php checked('1', get_option('ozh_yourls_do_posts')); ?> /></td>
	</tr>
	
	<tr valign="top">
	<th scope="row">Pages</th>
	<td><input type="hidden" value="0" name="ozh_yourls[do_pages]"/>
	<input name="ozh_yourls[do_pages]" id="ozh_yourls_do_pages" type="checkbox" value="1" <?php checked('1', get_option('ozh_yourls_do_pages')); ?> /></td>
	</tr>

	 
	<tr valign="top">
	<th scope="row">Login</th>
	<td><input type="text" name="ozh_yourls[twitter_login]" value="<?php echo get_option('ozh_yourls_twitter_login'); ?>" /></td>
	</tr>

	<tr valign="top">
	<th scope="row">Pwd</th>
	<td><input type="text" name="ozh_yourls[twitter_password]" value="<?php echo get_option('ozh_yourls_twitter_password'); ?>" /></td>
	</tr>

	</table>
	<p class="submit">
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
	</p>

	</form>
	</div>
	
	<?php	
}