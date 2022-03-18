<?php
	if(isset($_GET['ac'])&&$_GET['ac']=='logout'
){
	unset($_SESSION['dangnhap']);//Bỏ duy nhất 1 session
	header('location:login.php');
}
	?>
<div class="menu">
    	<ul>
        	<li style="width:100px;"><a href="index.php">Trang chủ</a></li>
            <li style="width:150px;"><a href="index.php?quanly=quanlyloaisp&ac=them">Quản lý loại sản phẩm</a></li>
            <li style="width:180px;"><a href="index.php?quanly=quanlychitietsp&ac=them">Quản lý chi tiết sản phẩm</a></li>
            <li style="width:100px; border-right:none;"><a href="index.php?ac=logout">Đăng xuất</a></li>
        </ul>
    </div>