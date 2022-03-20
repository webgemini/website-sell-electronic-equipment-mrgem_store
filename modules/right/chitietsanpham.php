<?php
	$sql_chitietsp="SELECT * FROM chitietsp WHERE id_sp = $_GET[id]";
	$query_chitietsp = mysqli_query($conn, $sql_chitietsp);
	$dong_chitietsp = mysqli_fetch_array($query_chitietsp);
?>
<p style="text-align:center;color:white;background:#09F;padding:10px;border-radius:4px;">Chi tiết sản phẩm</p>
<table width="400" border="1" style="border-collapse:collapse;">
  <tr>
    <td colspan="2"><div align="center">Chi tiết sản phẫm</div></td>
  </tr>
  <tr>
    <td rowspan="2"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['hinhanh']; ?>" width="200" height="200" /></td>
    <td><div align="center">Tên sản phẩm: <?php echo $dong_chitietsp['tensp']; ?></div></td>
  </tr>
  <tr>
    <td style="color:#F00" ><div align="center">Giá sản phẩm: <?php echo $dong_chitietsp['gia'] . ' VND'; ?></div></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông số kỹ thuật</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_chitietsp['mota']; ?></td>
  </tr>
  <a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['id_sp']; ?>"><img src="imags/oder.png" height="150" width="150" style="float:right" /></a>
</table>

