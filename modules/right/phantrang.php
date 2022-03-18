 
 <?php
 	
	 //phan trang
			 if(isset($_GET['trang'])&&!empty($_GET['trang'])){;
			 	$trang=$_GET['trang'];
				
			 if($trang==''||$trang=='1'){
				 $trang1=0;
			 }else{
				 $trang1=($trang*15)-15;
			 }
			 }	
			
 	$sql_all="select * from chitietsp limit $trang1,15";
	$query_all=mysql_query($sql_all);
 ?>
        	 <p style="text-align:center;color:red;background:#09F;padding:10px;border-radius:4px;"> Tất cả Sản phẩm</p>
             <div class="sanphamall">
             	<ul>
                <?php
				while($dong_all=mysql_fetch_array($query_all)){
				?>
                	<li><a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['id_sp'] ?>">
                    	<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['hinhanh'] ?> " width="100" height="100" />
                        <p><?php echo $dong_all['tensp'] ?></p>
                        <p style="color:#F00;">Giá sản phẩm:<?php echo $dong_all['gia'] ?> </p>
                        <p style="color:#F00;text-align:center"> Chi tiết </p>
                    </a></li>
                
                    <?php
					
				}
				
					
					?>
                    
                   
                </ul>
               
             </div>
             <p style="clear:both;">
            
             	<?php
				//dem so trang
					
					$dong_cou=mysql_query("select * from chitietsp  ");
				
					$cou=mysql_num_rows($dong_cou);
					
					$a=$cou/10;
					echo 'Trang:';
					for($b=1;$b<$a;$b++){
						echo ' <a href="index.php?trang='.$b.'">'.$b.'</a>'.' ' ;
					}
			?>
             
             </p>
             
 