
 <?php
 	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="select * from chitietsp where tensp LIKE '%$search%'";
		$query_search=mysql_query($sql_search);
	}
?>
        	 <p style="text-align:center;color:white;background:#09F;padding:10px;border-radius:4px;">Sản phẩm tìm thấy</p>
            
             <div class="sanphamall">
             <?php
			 if($count=mysql_num_rows($query_search)==0){?>
				 <p>Không tìm thấy sản phẩm nào</p>
			 <?php
			 }else{
			 ?>
             	<ul>
                <?php
				while($dong_search=mysql_fetch_array($query_search)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_search['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_search['tensp'] ?></p>
                        <p style="color:#F00;">Giá sản phẩm:<?php echo $dong_search['gia'] ?> </p>
                        <p style="color:#F00;text-align:center"> Chi tiết </p>
                    </a></li>
                    <?php
				}
			 }
					?>
                </ul>
             </div>
             
 