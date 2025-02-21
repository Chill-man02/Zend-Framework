<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

$content = file_get_contents('http://dantri.com.vn/c25s25/giaoduc/trang-4.htm');

$subject = $content;
$pattern = '#class="mt3 clearfix".*href="(.*)".*title="(.*)".*src="(.*)".*class="fon5.*>(.*)</div>#imsU';
preg_match_all($pattern,$subject,$matches);

$newArray = array();
foreach($matches[1] as $key => $info){
	$tmp['link'] 	= $matches[1][$key];
	$tmp['title'] 	= $matches[2][$key];
	$tmp['img'] 	= $matches[3][$key];
	$tmp['sumary'] 	= $matches[4][$key];
	$newArray[$key] = $tmp;
}

echo "<pre>";
print_r($newArray);
echo "</pre>";