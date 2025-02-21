<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
a:LINK, a:ACTIVE, a:VISITED {
	color: red;
	font-weight: bold;
	text-decoration: underline;
}

a:HOVER {
	color: green;
	font-weight: bold;
	text-decoration:none;
}
</style>
<?php
$content = file('khoa-hoc.txt') or die ('Cannot read file');

$strContent = '';
foreach ($content as $key){
	$strContent .= $key;
}

//echo $strContent;
$pattern = '#Zend Framework#i';
$replacement = '<a href="http://www.zend.vn">Zend Framework</a>';
$subject = $strContent;
$string = preg_replace($pattern,$replacement,$subject);

echo $string;