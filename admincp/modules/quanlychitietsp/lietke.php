<?php
	$sql = "SELECT * FROM chitietsp, loaisp WHERE loaisp.id_loaisp = chitietsp.id_loaisp ORDER BY chitietsp.id_sp DESC";
	$run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Hình ảnh</td>
    <td>Giá</td>
    <td>Loại sản phẩm</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  	$i = 0;
  	while ($dong = mysqli_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tensp']; ?></td>
    <td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['hinhanh']; ?>" width="60" height="60"></td>
    <td><?php echo $dong['gia'] . ' VND'; ?></td>
    <td><?php echo $dong['tenloaisp']; ?></td>
    <td><?php echo $dong['thutu']; ?></td>
    <td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['id_sp']; ?>">Sửa</a></td>
    <td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['id_sp']; ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
	}
  ?>
</table>
