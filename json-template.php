<?php
/*
Template Name: Json Template
*/
?>
<?php
	$args = array(
		'type'                     => 'post',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'name',
		'order'                    => 'ASC',
		'hide_empty'               => 1,
		'hierarchical'             => 1,
		'exclude'                  => '',
		'include'                  => '',
		'number'                   => '',
		'taxonomy'                 => 'dealstore',
		'pad_counts'               => false 
	); 

	$categories = get_categories( $args );
	$stores = [];
	foreach( $categories as $category ) {		
		$stores['coupons'] = get_category_link( $category->term_id );
		$stores['domain']  = get_field('domain_url', $category->taxonomy . '_' . $category->term_id);
		$super[] = $stores;	
	}	
	$data = array(
		'stores' => $super
	);
	wp_send_json($data);