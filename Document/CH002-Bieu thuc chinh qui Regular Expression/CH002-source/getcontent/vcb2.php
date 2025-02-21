<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$filename = 'http://vietcombank.com.vn/';
$content = file_get_contents($filename);

$subject = $content;
$pattern = '#(?<=<table class="tbl-exch" cellspacing="1" border="0" id="ctl00_Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table>)#imsU';
preg_match($pattern,$subject,$matches);

$strContent = '<table border="1">' .  $matches[0] . '</table>';

echo $strContent;

//<td class="code">AUD</td><td>18,552.57</td><td>18,664.56</td><td>18,928.47</td>
//</tr>
$subject = $strContent;
$pattern = '#class="code">(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td.*/tr>#imsU';
preg_match_all($pattern,$subject,$matches);

$newArray = array();
foreach($matches[1] as $key => $info){
	$newArray[$matches[1][$key]][0] = $matches[2][$key];
	$newArray[$matches[1][$key]][1] = $matches[3][$key];
	$newArray[$matches[1][$key]][2] = $matches[4][$key];
}
echo "<pre>";
print_r($newArray);
echo "</pre>";