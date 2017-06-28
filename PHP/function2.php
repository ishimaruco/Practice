<?php
function power_rate ( $watt, $hour, $rate = 25 ){
	$kWatt = $watt / 1000;
	$price = $kWatt * $hour * $rate;

	return $price;
}

// 蛍光灯を24時間稼働させた場合(第３引数をつけない場合)
print power_rate ( 40, 24 ) . "円 <br>";

// ドライヤーを安い電気代で1時間稼働させた場合(第３引数をつけた場合)
print power_rate( 1200, 1, 20 ) . "円<br>";