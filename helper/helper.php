<?php 

function rossport_sea_widgets_init_time() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'See Tide Clock', 'rossport_sea' ),
			'id'            => 'sidebar-2',
		)
	);
}
add_action( 'widgets_init', 'rossport_sea_widgets_init_time' );


?>