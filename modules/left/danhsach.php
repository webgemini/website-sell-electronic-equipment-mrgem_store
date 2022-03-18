<?php
	$sql_loaisp="select * from loaisp";
	$query=mysql_query($sql_loaisp);
?>
        	<p style="text-align:center;color:white;background:#09F;padding:10px;border-radius:4px;">Loại Sản phẩm</p>
            <div class="danhsachsanpham">
            	<ul>
                <?php
				while($dong_sp=mysql_fetch_array($query)){
				?>
                	<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
                   <?php
				}
				   ?>
                </ul>
            </div><!--Ket thuc loai sanpham-->
            <p style="text-align:center;color:white;background:#09F;padding:10px;border-radius:4px;">Hiệu Sản phẩm</p>
            <div class="danhsachsanpham">
            	<ul>
                	<li><a href="#">Apple</a></li>
                    <li><a href="#">DELL</a></li>
                    <li><a href="#">SONY</a></li>
                    <li><a href="#">SAMSUNG</a></li>
                </ul>
            </div><!--Ket thuc hieu sanpham-->
