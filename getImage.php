<?php
$okExts = array( 'png', 'jpg', 'gif', 'jpeg' );
$imgURL = $_SERVER['QUERY_STRING'];
if( $_SERVER['QUERY_STRING'] ){
	$imgBits = explode( '.', $imgURL );
	$ext = strtolower( array_pop( $imgBits ) );
	if( !in_array( $ext, $okExts ) ){ echo "FAIL"; exit(); }
	switch( $ext ){
		case 'png':
			header('Content-type: image/png');
			break;
		case 'jpeg':
		case 'jpg':
			header('Content-type: image/jpeg');
			break;
		case 'gif':
			header('Content-type: image/gif');
			break;
	}
	readfile( $imgURL );
}

?>