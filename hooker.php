<?php

/* test actions & filters here!!! */

function my_add_tab( $tabs, $base_url ) {
	$tabs['justin'] =
		array( 'label' => __( 'Justin', 'wpet' ),
			   'url' => add_query_arg( array( 'tab' => 'justin' ), $base_url )
		);
	return $tabs;
}
add_filter( 'wpet_settings_tabs', 'my_add_tab', 10, 2 );