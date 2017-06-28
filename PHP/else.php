<?php
error_reporting( E_ALL );
$age = rand(2 , 80);
if ($age < 15){
	print "映画館に子供料金で入れます";
} else if( $age < 65) {
	print "映画館は一般料金で入れます";
} else {
	print "映画館はシニア料金で入れます";
}