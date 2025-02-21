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
echo '<table border="1">' . $matches[0] . "</table>";
//<td class="code">EUR</td><td>26,684.13</td><td>26,764.42</td><td>27,116.33</td>
//</tr>
$subject = $matches[0];
$pattern = '#class="code">(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</.*/tr>#imsU';
preg_match_all($pattern,$subject,$matches);

$newArray = array();

echo "<pre>";
print_r($matches);
echo "</pre>";