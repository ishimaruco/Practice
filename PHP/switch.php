<?php
switch ( $gender ) {
	case 0:
		print "女性";
		break;
	case 1:
		print "男性";
		break;
	case 2:
		print "未回答";
		break;
	default:
		print "性別を入力してください";
}