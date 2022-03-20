<?php
	$sql_chitiet = "SELECT * FROM chitietsp WHERE id_loaisp = '$_GET[id]'";
	$query = mysqli_query($conn, $sql_chitiet);
?>
 <?php
	$sql_loaisp = "SELECT * FROM loaisp WHERE id_loaisp = '$_GET[id]'";
	$query_loaisp = mysqli_query($conn, $sql_loaisp);
	$dong_loaisp = mysqli_fetch_array($query_loaisp);
?>
<p style="text-align:center;color:red;background:#09F;padding:10px;border-radius:4px;"><?php echo $dong_loaisp['tenloaisp'] ?></p>
<div class="sanphamall">
	<ul>
	<?php
	while ($dong_chitiet = mysqli_fetch_array($query)){
	?>
		<li>
			<a href="index.php?xem=chitietsanpham&id=<?php echo $dong_chitiet['id_sp']; ?>">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['hinhanh']; ?> " width="100" height="100" />
			<p><?php echo $dong_chitiet['tensp']; ?></p>
			<p style="color:#F00;">Giá sản phẩm:<?php echo $dong_chitiet['gia'] . ' VND'; ?> </p>
			<p style="color:#F00;text-align:center"> Chi tiết </p>
			</a>
		</li>
		<?php
	}
		?>
	</ul>
</div>

