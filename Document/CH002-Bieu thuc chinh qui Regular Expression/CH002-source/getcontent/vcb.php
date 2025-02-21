<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$filename = 'http://vietcombank.com.vn/';
$content = file_get_contents($filename);

$subject = $content;
$pattern = '#(?<=<table class="tbl-exch" cellspacing="1" border="0" id="ctl00_Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table>)#imsU';
preg_match($pattern,$subject,$matches);

$strContent = '<table border="1">' .  $matches[0] . '</table>';

echo $strContent;