<?php
	// Tạo kết nối (Servername, tài khoản, password, database)
	$conn = mysqli_connect('localhost', 'root', '', 'zend');

	// Kiểm tra kết nối
	if ($conn) {

		// Câu lệnh SQL
		$sql = "SELECT id, group_name FROM user_group";

		// Gửi câu lệnh đến SQL để thực thi
		$result = mysqli_query($conn, $sql);

		$newArr = array();

		while ($row = mysqli_fetch_assoc($result)) {
			// echo $row['id'] . '-' . $row['group_name'] . '<br>';
			$newArr[$row['id']] = $row['group_name'];
		}

		function createDropdownList($id, $name, $valueArray, $style) {
			$xhtml = '<select name="'.$name.'" id="'.$id.'" style="'.$style.'">';

			foreach ($valueArray as $key => $value) {
				if ($key == 4) {
					$xhtml .= '<option value='.$key.' selected="selected">'.$value.'</option>';
				} else
					$xhtml .= '<option value='.$key.'>'.$value.'</option>';
			}

			$xhtml .= '</select>';
			return $xhtml;
		}
		$groupUser = createDropdownList(3, 'group_user', $newArr, 'width: 200px; boder: solid 1px #ccc;');
		
	} else {
		die("Kết nối thất bại: " . mysqli_connect_error());
	}
?>

<h1>Danh sách User</h1>
<?php 
	echo $groupUser;
 ?>