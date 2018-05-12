<?php
/*
Plugin Name: Biz Hours
Plugin URI: https://theemwiz.com
Description: An easy to use opening hours WordPress plugin manager for any kind of venue.
Author: Theemwiz
Version: 1.0.0
Author URI: https://theemwiz.com
Text Domain: tw-biz-hours
*/


/**
 *
 * Action to add admin menu in dashboard
 *
 */

if ( ! function_exists( 'tw_bh_add_admin_menu' ) ) {
	function tw_bh_add_admin_menu() {

		/* Main Menu */
		$main_menu_item = 'tw_bh_admin_page';
		$main_menu_title = 'Biz Hours';
		add_menu_page( $main_menu_title, $main_menu_title, 'manage_options', $main_menu_item, $main_menu_item, 'dashicons-editor-table' );

		/* Sub Menu */
		add_submenu_page( $main_menu_item, $main_menu_title, $main_menu_title, 'manage_options', $main_menu_item, $main_menu_item );
	}
}

add_action( 'admin_menu', 'tw_bh_add_admin_menu' );

if ( ! function_exists( 'tw_bh_admin_page') ) {
	function tw_bh_admin_page() {
		?>
		<div class="wrap">
			<h1>
				<?php esc_html_e( 'Biz Hours', 'tw-biz-hours' ); ?>
			</h1>
			<form action="options.php" method="post">
				<?php
					// generates nonce for plugin option
					settings_fields( 'tw_bh_options' );
					// generates a hidden unique form handling url
					//@do_settings_fields( 'tw_bh_options' );
				?>
				<table class="form-table">
					<tbody>
						<tr>
							<th scope="row"><?php esc_html_e( 'Monday', 'tw-biz-hours' ); ?></th>
							<td>
								<?php

								?>
							</td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Tuesday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Wednesday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Thursday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Friday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Saturday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
						<tr>
							<th scope="row"><?php esc_html_e( 'Sunday', 'tw-biz-hours' ); ?></th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
		<?php
	}
}

if ( ! function_exists( 'tw_bh_get_hours_dropdown_list' ) ) {
	function tw_bh_get_hours_dropdown_list( $selected_hour ) {
		
	}
}