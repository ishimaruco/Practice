<?php
$money = 1314;
$kinds = array( 1,10,50,100 );
rsort( $kinds );

foreach ( $kinds as $val ) {
	$quantity = floor( $money / $val );
	if ( $quantity == 0 ) {
		continue;
	}
	$money = $money - $val * $quantity;
	print $val . "が" . $quantity . "枚";
}