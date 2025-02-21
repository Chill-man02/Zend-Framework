<?php 
	require_once 're_functions.php';
	
	$error = array();
	
	if(!empty($_POST)){
		
		//username
		if(empty($_POST['username'])){
			$error[] = 'Username: Khong duoc quyen de trong';
		}else{
			if(checkUser(trim($_POST['username']))== false){
				$error[] = 'Username: Du lieu nhap khong dung yeu cau';
			}
		}
		
		//email
		if(empty($_POST['email'])){
			$error[] = 'Email: Khong duoc quyen de trong';
		}else{
			if(checkEmail(trim($_POST['email']))== false){
				$error[] = 'Email: Du lieu nhap khong dung yeu cau';
			}
		}
		
		//password
		if(empty($_POST['password'])){
			$error[] = 'Password: Khong duoc quyen de trong';
		}else{
			if(checkPass(trim($_POST['password']))== false){
				$error[] = 'Password: Du lieu nhap khong dung yeu cau';
			}
		}
		
		//phone
		if(empty($_POST['phone'])){
			$error[] = 'Phone: Khong duoc quyen de trong';
		}else{
			if(checkPhone(trim($_POST['phone']))== false){
				$error[] = 'Phone: Du lieu nhap khong dung yeu cau';
			}
		}
		
		//website
		if(empty($_POST['website'])){
			$error[] = 'Website: Khong duoc quyen de trong';
		}else{
			if(checkWebsite(trim($_POST['website']))== false){
				$error[] = 'Website: Du lieu nhap khong dung yeu cau';
			}
		}
	}

	
?>
<?php 
	if(count($error)>0){
		foreach ($error as $key){
			echo ' - ' . $key . '<br>';
		}
	}else{
		header('Location: dang-ky-thanh-cong.php');
	}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" bordercolordark="#FFFFFF" cellspacing="0" cellpadding="4" bgcolor="#CCCCFF">
	<tr>
		<td width="150px">Username *</td>
		<td ><label> <input type="text" name="username" id="username" /> </label></td>
	</tr>
	<tr>
		<td>Email * </td>
		<td><label> <input type="text" name="email" id="email" /> </label></td>
	</tr>
	<tr>
		<td>Password * </td>
		<td><label> <input type="text" name="password" id="password" /> </label></td>
	</tr>
	<tr>
		<td>Phone * </td>
		<td><label> <input type="text" name="phone" id="phone" /> </label></td>
	</tr>
	<tr>
		<td>Website * </td>
		<td><label> <input type="text" name="website" id="website" /> </label></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><label> <input type="submit" name="submit" id="submit" value="Đăng ký" /> </label></td>
	</tr>
</table>
</form>