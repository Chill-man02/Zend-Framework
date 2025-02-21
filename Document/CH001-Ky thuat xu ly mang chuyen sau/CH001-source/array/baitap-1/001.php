<?php
 	$con = mysql_connect('localhost','root','');
 	mysql_select_db('test',$con);
 	
 	$sql = "SELECT id, group_name FROM user_group";
 	$result = mysql_query($sql);
 	
 	$newArr = array();
 	while($row = mysql_fetch_assoc($result)){
 		echo $row['id'] . ' - ' . $row['group_name'] . '<br>';
 		$newArr[$row['id']] = $row['group_name'];
 	}
 
 	echo "<pre>";
 	print_r($newArr);
 	echo "</pre>";
 	
 	
 	function selectbox($name,$id,$options,$attri){
 		$xhtml = '<select name="' . $name. '" id="' . $name. '" style="' . $attri . '">';
 		foreach ($options as $key => $val){
 			if($key == $id){
 				$xhtml .= '<option value="' . $key . '" selected="selected">' . $val . '</option>';
 			}else{
 				$xhtml .= '<option value="' . $key . '">' . $val . '</option>';
 			}
 		}
 		
 		$xhtml .= '</select>';
 		
 		return $xhtml;
 	}
 	
 	$select = selectbox('group_member',2, $newArr, 'width: 200px;');
 	echo $select;
 ?>

 
 
 
 