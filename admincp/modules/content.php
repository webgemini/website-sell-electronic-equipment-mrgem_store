<div class="content">
	<h1 style="text-align:center;">Welcome to Admin</h1>
	<h3 style="text-align:center;">Chào mừng bạn đến với trang quản trị quyền Admin.</h3>
    <?php
	if(isset($_GET['quanly'])){
		$tam=$_GET['quanly'];
	}else{
		$tam='';
	}if($tam=='quanlyloaisp'){
		include('modules/quanlyloaisp/main.php');
	}if($tam=='quanlychitietsp'){
		include('modules/quanlychitietsp/main.php');
	}
	?>
    <div class="clear"></div>