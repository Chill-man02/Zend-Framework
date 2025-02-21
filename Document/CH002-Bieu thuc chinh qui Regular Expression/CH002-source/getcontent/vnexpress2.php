<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

$content = file_get_contents('http://vnexpress.net/GL/Phap-luat/2010/10/3BA21289/');

$subject = $content;
//<P class=Title>Thiếu phương tiện chữa cháy đặc chủng ở chung cư</P>
//<P class=Lead>Cả nước có chưa tới 140 đội chữa cháy chuyên nghiệp, thiếu nhiều so với yêu cầu thực tế. Chỉ 30% số xe cứu hỏa hoạt động tốt. Phương tiện dập hỏa đặc chủng ở trong hầm lò, nhà cao tầng... đang thiếu nghiêm trọng.<BR>> <A href="/GL/Phap-luat/2010/04/3BA1A51F/" class=Lead>Khởi tố điều tra vụ cháy chung cư 18 tầng</A></P>
//noi dung
//<div style="margin-top:5px;margin-bottom:5px;">
$pattern = '#<P class=Title>(.*)</P.*P class=Lead>(.*)</P>(.*)<div style="margin-top:5px;margin-bottom:5px;">#imsU';
preg_match_all($pattern,$subject,$matches);

$title = $matches[1][0];
$sumary = $matches[2][0];
$content = $matches[3][0];
echo $content;
