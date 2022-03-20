<?php
	$sql = "SELECT * FROM loaisp WHERE id_loaisp = $_GET[id]";
	$run = mysqli_query($conn, $sql);
	$dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp']; ?>" method="post" enctype="multipart/form-data">
<table width="100%" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại sản phẩm</div></td>
  </tr>
  <tr>
    <td>Tên loại sản phẩm</td>
    <td><input type="text" name="tenloaisp" value="<?php echo $dong['tenloaisp']; ?>" ></td>
  </tr>
  <tr>
    <td>Thứ tứ</td>
    <td><input type="text" name="thutu" value="<?php echo $dong['thutu']; ?>" ></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</form>