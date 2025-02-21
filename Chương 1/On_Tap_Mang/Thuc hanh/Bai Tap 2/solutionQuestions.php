<!-- <meta http-equiv="Content-Type" content="text/html; chartset=utf-8"/> -->
<?php
	$data = file('questions.txt') or die("Cannot read file");

	foreach ($data as $key => $infor) {
		if ($key != 0) {
			$tmp = explode('|', $infor);

			$newArr[$tmp[0]] = array('question' => $tmp[1]);
		}
	}
	echo "<pre>";
	print_r($newArr);
	echo "</pre>";
?>