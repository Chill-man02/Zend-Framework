<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
$content = file_get_contents('http://vnexpress.net/GL/Xa-hoi/');

$subject = $content;
$pattern = '#(<div class="folder-top">|<div class="folder-news">).*</div>#imsU';
preg_match_all($pattern,$subject,$matches);

$news = $matches[0];
/*echo "<pre>";
print_r($news);
echo "</pre>";*/

$newArray = array();
$i = 0;
foreach ($news as $key){
	
	if($i == 15){
		break;
	}
	$subject = $key;
	$pattern = '#(?<=<a href=").*(?=">)#';
	preg_match($pattern,$subject,$link);	
	$newArray[$i]['link'] = $link[0];
	
	$subject = $key;
	$pattern = '#(?<=src=").*(?=" alt="")#';
	preg_match($pattern,$subject,$img);
	$newArray[$i]['img'] = $img[0];
	
	$subject = $key;
	$pattern = '#((?<=class="link-title">)|(?<=class="link-topnews">)).*(?=</a>)#';
	preg_match($pattern,$subject,$title);
	$newArray[$i]['title'] = $title[0];
	
	$subject = $key;
	$pattern = '#<p>.*</#ismU';
	preg_match_all($pattern,$subject,$sumary);
	$newArray[$i]['sumary'] = strip_tags($sumary[0][1]);
	$i++;
	
}

echo "<pre>";
print_r($newArray);
echo "</pre>";