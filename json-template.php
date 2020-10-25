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
	//echo '<pre>';
    //print_r( $categories ); 
	$stores = [];
	foreach( $categories as $category ) {
		
		$stores['coupons'] = get_category_link( $category->term_id );
		$stores['domain']  = get_field('domain_url', $category->taxonomy . '_' . $category->term_id);
		
		// echo '==========='. '<br/>';
		// echo get_category_link( $category->term_id ). '<br/>';
		
		// $domain_url = get_field('domain_url', $category->taxonomy . '_' . $category->term_id);
		// echo $domain_url. '<br/>';
		
		// $term_vals = get_term_meta($category->term_id);
		// foreach($term_vals as $key=>$val){
			// echo $key . ' : ' . $val[0] . '<br/>';
		// }
		$super[] = $stores;	
	}
	
	$data = array(
		'stores' => $super
	);
	wp_send_json($data);


/*
global $wpdb;
$response = $wpdb->get_results(" SELECT t.term_id,t.slug, tm.meta_key,tm.meta_value
	FROM " . $wpdb->prefix . "terms t  JOIN " . $wpdb->prefix . "termmeta tm ON t.`term_id` = tm.`term_id`
	JOIN " . $wpdb->prefix . "term_taxonomy tt ON tt.`term_id` = t.`term_id`
	WHERE tt.`taxonomy` = 'dealstore' 
	"
    , ARRAY_A);
$stores = [];
foreach($response as $key => $value){
   $newarray[$value['term_id']][$key] = $value;
}
foreach($newarray as $key => $data){	
		foreach($data as $row){			
			
			$stores['coupons'] = 'https://couponclans.com/view/'.$row['slug'];		
			
			if($row['meta_key']=='domain_url'){
				$stores['domain'] = 'http://'.$row['meta_value'];
			}
			
			// if($row['meta_key']=='brandimage'){
				// $stores['image_url'] = $row['meta_value'];
			// }
			
		}	
		$super[] = $stores;
}
$data = array(
	'stores' => $super
);
wp_send_json($data);
*/