<?php
$member = array(
	'name' => "たろう",
	'age' => "27" ,
	'gender' => "男性" ,
);

foreach ($member as $key => $value) {
	echo $key . "は" . $value . "です";
}