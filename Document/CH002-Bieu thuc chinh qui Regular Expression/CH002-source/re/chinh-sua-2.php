<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$content = file('script.txt') or die ('Cannot read file');

$strContent = '';
foreach ($content as $key){
	$strContent .= $key;
}

//echo $strContent;
$pattern = array('#<script([^>]*)>#i','#</script([^>]*)>#i');
$replacement = array('<pre>&lt;script\\1&gt;','&lt;/script\\1&gt;</pre>');
$subject = $strContent;
$string = preg_replace($pattern,$replacement,$subject);

echo $string;