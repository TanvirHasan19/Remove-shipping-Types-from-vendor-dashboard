/**
 * Remove shipping Types from vendor dashboard
 */

function remove_shipping_types( $shipping_types ){
    unset( $shipping_types['flat_rate'] );
	unset( $shipping_types['local_pickup'] );
    return $shipping_types;
}
add_filter( 'dokan_available_shipping_methods', 'remove_shipping_types', 11 );
