<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM pegawai";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'nama' => $data['nama'],
		'nip' => $data['nip'],
		'nick' => $data['nick'],
		'no_wa' => $data['no_wa'],
		'arsip' => $data['arsip'],
		'bidang' => $data['bidang'],
		'pangkat' => $data['pangkat'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `pegawai` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'nama' => $data['nama'], 
		'nip' => $data['nip'], 
		'nick' => $data['nick'], 
		'no_wa' => $data['no_wa'], 
		'arsip' => $data['arsip'], 
		'bidang' => $data['bidang'], 
		'pangkat' => $data['pangkat'], 
		
    );
  }
return $datas;
}

function Insert(){
  $nama=$_POST['nama']; 
		$nip=$_POST['nip']; 
		$nick=$_POST['nick']; 
		$no_wa=$_POST['no_wa']; 
		$arsip=$_POST['arsip']; 
		$bidang=$_POST['bidang']; 
		$pangkat=$_POST['pangkat']; 
		
  $query = "INSERT INTO `pegawai` (`id`,`nama`,`nip`,`nick`,`no_wa`,`arsip`,`bidang`,`pangkat`)
VALUES (NULL,'$nama','$nip','$nick','$no_wa','$arsip','$bidang','$pangkat')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Update($id){
  $nama=$_POST['nama']; 
		$nip=$_POST['nip']; 
		$nick=$_POST['nick']; 
		$no_wa=$_POST['no_wa']; 
		$arsip=$_POST['arsip']; 
		$bidang=$_POST['bidang']; 
		$pangkat=$_POST['pangkat']; 
		
  $query = "UPDATE `pegawai` SET `nama` = '$nama',`nip` = '$nip',`nick` = '$nick',`no_wa` = '$no_wa',`arsip` = '$arsip',`bidang` = '$bidang',`pangkat` = '$pangkat' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Delete($id){
  $query = "DELETE FROM `pegawai` WHERE `id` = '$id'";
  $exe = mysqli_query(Connect(),$query);
    if($exe){
      // kalau berhasil
      $_SESSION['message'] = " Data Sudah dihapus ";
      $_SESSION['mType'] = "success ";
      header("Location: index.php");
    }
    else{
      $_SESSION['message'] = " Data Gagal dihapus ";
      $_SESSION['mType'] = "danger ";
      header("Location: index.php");
    }
}


function Duplicate($id){
    $one = GetOne($id);
  $nama=$one[0]["nama"]; 
		$nip=$one[0]["nip"]; 
		$nick=$one[0]["nick"]; 
		$no_wa=$one[0]["no_wa"]; 
		$arsip=$one[0]["arsip"]; 
		$bidang=$one[0]["bidang"]; 
		$pangkat=$one[0]["pangkat"]; 
		
   $query = "INSERT INTO `pegawai` (`nama`,`nip`,`nick`,`no_wa`,`arsip`,`bidang`,`pangkat`)
VALUES ('$nama','$nip','$nick','$no_wa','$arsip','$bidang','$pangkat')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
if(isset($_POST['insert'])){
  Insert();
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
else if(isset($_POST['duplicate'])){
  Duplicate($_POST['id']);
}
?>
