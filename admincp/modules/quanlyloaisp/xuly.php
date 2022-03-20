<?php
	require_once'../config.php';
	$id = $_GET['id'];
	$tenloaisp = $_POST['tenloaisp'];
	$thutu = $_POST['thutu'];
	if (isset($_POST['them'])){
		//them
		$sql = "INSERT INTO loaisp (tenloaisp,thutu) VALUES ('$tenloaisp', '$thutu')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}else if (isset($_POST['sua'])){
		//sua
		$sql = "UPDATE loaisp SET tenloaisp = '$tenloaisp', thutu = '$thutu' WHERE id_loaisp = '$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
	}else {
		//xoa
		$sql = "DELETE FROM loaisp WHERE id_loaisp = '$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>