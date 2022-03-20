<?php
	 //phan trang
	 $limit_page = 15;
	if (isset($_GET['trang']) && !empty($_GET['trang'])){;
	$trang = $_GET['trang'];

	if ($trang == '' || $trang == '1'){
		$trang1 = 0;
	}else {
		$trang1 = ($trang * $limit_page) - $limit_page;
	}
	}
 	$sql_all = "SELECT * FROM chitietsp LIMIT $trang1, $limit_page";
	$query_all = mysqli_query($conn, $sql_all);
?>
<p style="text-align:center;color:red;background:#09F;padding:10px;border-radius:4px;"> Tất cả Sản phẩm</p>
<div class="sanphamall">
	<ul>
	<?php
	while ($dong_all = mysqli_fetch_array($query_all)){
	?>
		<li>
			<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sp']; ?>">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh']; ?> " width="100" height="100" />
			<p><?php echo $dong_all['tensp']; ?></p>
			<p style="color:#F00;">Giá sản phẩm:<?php echo $dong_all['gia'] .' VND'; ?> </p>
			<p style="color:#F00;text-align:center"> Chi tiết </p>
			</a>
		</li>
		<?php
		}
		?>
	</ul>
</div>
	<p style="clear:both;">
	<?php
	//dem so trang
	$sql = "SELECT * FROM chitietsp";
	$dong_count = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($dong_cou);
	$a = $count / 10;
	echo 'Trang:';
	for ($b = 1; $b < $a; $b++){
		echo ' <a href="index.php?trang='.$b.'">'.$b.'</a>'.' ' ;
	}
	?>
	</p>

