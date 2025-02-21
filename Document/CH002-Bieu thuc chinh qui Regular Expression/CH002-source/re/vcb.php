<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
#bang-ngoai-te{
	background-color: green;
}
</style>
<?php
$filename = 'http://vietcombank.com.vn/';
$content = file_get_contents($filename);

//echo $content;
$subject = $content;
//<table class="tbl-exch" cellspacing="1" border="0" id="ctl00_Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">

$pattern = '#(?<=<table class="tbl-exch" cellspacing="1" border="0" id="ctl00_Content_HomeSideBar_RatesBox_ExchangeRates_ExrateView">).*(?=</table>)#imsU';

preg_match($pattern,$subject,$matches);

$strContent = '<table border="1" id="bang-ngoai-te">' . $matches[0] . '</table>';

echo $strContent;