<?php
	include('../config.php');
	$id=$_GET['id'];
	$tenloaisp=$_POST['tenloaisp'];
	$thutu=$_POST['thutu'];
	if(isset($_POST['them'])){
		//them
		$sql="insert into loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu')";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua
		$sql="update loaisp set tenloaisp='$tenloaisp',thutu='$thutu' where id_loaisp='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}else{
		//xoa
		$sql="delete from loaisp where id_loaisp='$id'";
		mysql_query($sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>