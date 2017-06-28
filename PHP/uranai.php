<?php
$uranai[] = "はずれ";
$uranai[] = "二等賞";
$uranai[] = "三等賞";
$uranai[] = "四等賞";
$uranai[] = "五等賞";
$uranai[] = "六等賞";
$uranai[] = "一等賞";

$kekka = mt_rand( 1,6 );

print( $uranai[$kekka] );