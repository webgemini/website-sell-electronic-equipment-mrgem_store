<?php
	require_once('modules/config.php');
	session_start();
		if (isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password' LIMIT 1";
		$query = mysqli_query($conn, $sql);
		$nums = mysqli_num_rows($query);
		if ($nums > 0){
			$_SESSION['dangnhap'] = $username;
			header('location:index.php');
		}else {
			header('location:login.php');
		}
	}
?>
<form action="" method="post">
<center><table width="300" border="1" style="border-collapse:collapse; margin-top:50;">
  <tr>
    <td colspan="2"><div align="center">Login</div></td>
  </tr>
  <tr>
    <td>Username</td>
    <td><input type="text" name="username" size="20"></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" size="20"></td>
  </tr>
  <tr>
    <td colspan="2">
      <div align="center">
        <input type="submit" name="login" id="button" value="Login">
      </div>
  </td>
  </tr>
</table></center></form>
