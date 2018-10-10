<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng Nhập </title>
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
	<?php
		require_once "../config.php";

		$db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	   if($_SERVER["REQUEST_METHOD"] == "POST")
	   {
	      // tên_người_dùng và mật_khẩu được gửi từ form 
	      
	      $myusername=mysqli_real_escape_string($db,$_POST['user']);
	      $mypassword=mysqli_real_escape_string($db,$_POST['pass']); 
	      
	      $sql="SELECT id FROM user WHERE name='$myusername' and password='$mypassword'";
	      $result=mysqli_query($db,$sql);
	      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	      
	      $count=mysqli_num_rows($result);
	      if($count==1)
	      {
	      		$_SESSION['login_user']=$myusername;
         		header("location: index.php");
	      }
	      else 
	      {
	         echo $error = "<div class='messenger'><strong>Lỗi: </strong>Tên tài khoản hoặc mật khẩu không hợp lệ! </div>";
	      }
	   }

	?>
	<h2 style="text-align: center;">ĐĂNG NHẬP TÀI KHOẢN</h2>
	<div style="margin: auto; width: 450px;">
		<fieldset><legend>Đăng nhập tại đây</legend> 
			<form method="post" action="login.php">
				<table style="margin: 0 auto;">
					  <tr>
					    <td>Tên tài khoản:</td>
					    <td><input type="text" name="user" style="padding: 5px;"></td>
					  </tr>
					  <tr>
					    <td>Mật khẩu:</td>
					    <td><input type="password" name="pass" style=" padding: 5px;"></td>
					  </tr>
					  
					  <tr>
					  	<td></td>
					    <td><input type="submit" value="Đăng nhập" name="submit"> <input type="reset" value="Trở lại trang chủ" onclick="window.location.href='../index.php'"></td>
					  </tr>
				</table>
				
			</form>
		</fieldset> 
	</div>
	
</body>
</html>