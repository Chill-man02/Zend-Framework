<?php


function phepCong($sothu1,&$sothu2){
	$ketqua = $sothu1 + $sothu2;
	$sothu2 = $sothu2 * 10;
	return $ketqua;
}

$sothu1 = 10;
$sothu2 = 5;

echo phepCong($sothu1,$sothu2);

echo "<br>" . $sothu2;