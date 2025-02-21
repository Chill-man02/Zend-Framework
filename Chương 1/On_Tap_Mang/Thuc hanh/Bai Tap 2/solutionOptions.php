<?php 
	// $data = file('options.txt') or die("Cannot read file");

	// foreach ($data as $key => $value) {
	// 	if ($key != 0) {
	// 		$tmp = explode('|', $value);


	// 		foreach ($tmp as $key1 => $infor) {
	// 			$newArr[$infor[0]] = array($infor[1] => array('option' => $infor[2], 'point' => $infor[3]));
	// 		};
	// 	}
	// }

	// 		echo "<pre>";
	// 		print_r($newArr);
	// 		echo "</pre>";

$data = file('options.txt') or die("Cannot read file");

$newArr = [];

foreach ($data as $key => $value) {
	// Bỏ qua dòng tiêu đề (nếu có)
	if ($key != 0) {
		// Loại bỏ khoảng trắng
		$value = trim($value);

		// Kiểm tra nếu dòng không rỗng
		if (!empty($value)) {
			// Tách chuỗi thành mảng (4 phần tử)
			$tmp = explode('|', $value);

			// Kiểm tra nếu có đủ 4 phần tử
			if (count($tmp) === 4) {
				$question_id = trim($tmp[0]); // ID câu hỏi
				$option_id = trim($tmp[1]);   // ID lựa chọn
				$option_text = trim($tmp[2]); // Nội dung lựa chọn
				$point = trim($tmp[3]);       // Điểm số

				// Đưa vào mảng theo question_id
				$newArr[$question_id][$option_id] = [
					'option_text' => $option_text,
					'point' => (int)$point // Chuyển về số nguyên
				];
			} else {
				// Ghi log nếu có lỗi
				error_log("Dòng không hợp lệ: " . $value);
			}
		}
	}
}

// Hiển thị kết quả
echo "<pre>";
print_r($newArr);
echo "</pre>";



 ?>