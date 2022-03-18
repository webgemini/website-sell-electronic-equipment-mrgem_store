<div class="content">
		<div class="left">
        	<?php
				include('modules/left/danhsach.php');
			?>
        </div>
    	<div class="right">
        	<?php
				if(isset($_GET['xem'])){
					$tam=$_GET['xem'];
				}else{
					$tam='';
				}if($tam=='chitietloaisanpham'){
					include('modules/right/chitietloaisanpham.php');
				}elseif($tam=='chitietsanpham'){
					include('modules/right/chitietsanpham.php');
				}elseif($tam=='dangky'){
					include('modules/right/dangky.php');
				}elseif($tam=='thongbao'){
					include('modules/right/thongbao.php');
				}elseif($tam=='thanhtoan'){
					include('modules/right/thanhtoan.php');
				}elseif(isset($_POST['search'])){
					include('modules/right/search.php');
				}elseif($tam=='dangnhap'){
					include('modules/right/dangnhap.php');
				}elseif($tam=='giohang'){
					include('modules/right/cart.php');
				}elseif($tam=='trang'){
					include('modules/right/phantrang.php');
				}else{
					include('modules/right/tatcasanpham.php');
				};
				
			?>
        </div>
       
    </div>
    <div class="clear"></div>