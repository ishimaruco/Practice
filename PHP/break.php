<?php
for ( $a = 1; $a <= 200; $a++ ) {
	if ( $a % 2 == 0 ) {
		continue;
	}
	if ( $a > 100 ) {
		break;
	}
	print $a . '<br>';
}
