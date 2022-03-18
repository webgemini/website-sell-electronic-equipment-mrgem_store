<?php
	$sql="select * from loaisp order by id_loaisp desc";
	$run=mysql_query($sql);
?>
<table width="100%" border="1">
  <tr>
    <td>ID</td>
    <td>Tên sản phẩm</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <?php
  $i=0;
  while($dong=mysql_fetch_array($run)){
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $dong['tenloaisp'] ?></td>
    <td><?php echo $dong['thutu'] ?></td>
    <td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['id_loaisp'] ?>">Sửa</a></td>
    <td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['id_loaisp'] ?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
