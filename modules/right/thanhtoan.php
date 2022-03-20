<?php
	session_start();
	if (isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = $_POST['matkhau'];
		$sql_dangnhap = "SELECT * FROM dangky WHERE email='$email' and matkhau = '$matkhau' LIMIT 1";
		$run_dangnhap = mysqli_query($conn, $sql_dangnhap);
		$count_dangnhap = mysqli_num_rows($run_dangnhap);
		if ($count_dangnhap == 0){
			echo '<script>alert("Sai tài khoản hoặc mật khẩu!")</script>';
		}else {
			$_SESSION['dangnhap'] = $email;
			header('location:index.php?xem=giohang');
		}
	}
?>
<form action="" method="post" enctype="multipart/form-data">
  <div align="center">
    <table width="500" border="0">
      <tr>
        <td colspan="2"><div align="center">Đăng nhập thành viên</div></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" name="email" size="50%"></td>
      </tr>
      <tr>
        <td>Mật khẩu</td>
        <td><input type="password" name="matkhau" size="50%"></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="dangnhap" value="Đăng nhập">
        </div></td>
      </tr>
  </table>
  </div>
</form>
