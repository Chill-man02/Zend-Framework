<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once 'cau-a.php'; //$arrQuestion
require_once 'cau-b.php'; //$arrOption

$newArray = array();

foreach($arrQuestion as $key => $info){
	$newArray[$key]['question'] = $info['question'];
	$newArray[$key]['sentences'] = $arrOption[$key];
}

/*echo "<pre>";
print_r($newArray);
echo "</pre>";
*/