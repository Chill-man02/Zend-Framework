<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$data  = file('question.txt') or die("Cannot read file");

$point = 0;

foreach($data as $key => $info){
	$tmp = explode('|',$info);
	/*echo "<pre>";
	print_r($tmp);
	echo "</pre>";*/
	$point =  $point + $_POST[$tmp[0]];
}

echo "<br><b> Tổng số điểm của bạn là:</b> " . $point;

$data  = file('result.txt') or die("Cannot read file");
foreach($data as $key => $info){
	$tmp = explode('|',$info);	
	if($point >= $tmp[0] && $point <= $tmp[1]){
		$result = $tmp[2];
		break;
	}
	
}
echo "<br><b>Kết quả trắc nghiệm của bạn:</b> " . $result;


