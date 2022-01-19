<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM kegiatan";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'nm_keg' => $data['nm_keg'],
		'pagu_awal' => $data['pagu_awal'],
		'nokeg' => $data['nokeg'],
		'pptk' => $data['pptk'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `kegiatan` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'nm_keg' => $data['nm_keg'], 
		'pagu_awal' => $data['pagu_awal'], 
		'nokeg' => $data['nokeg'], 
		'pptk' => $data['pptk'], 
		
    );
  }
return $datas;
}

function Insert(){
  $nm_keg=$_POST['nm_keg']; 
		$pagu_awal=$_POST['pagu_awal']; 
		$nokeg=$_POST['nokeg']; 
		$pptk=$_POST['pptk']; 
		
  $query = "INSERT INTO `kegiatan` (`id`,`nm_keg`,`pagu_awal`,`nokeg`,`pptk`)
VALUES (NULL,'$nm_keg','$pagu_awal','$nokeg','$pptk')";
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
  $nm_keg=$_POST['nm_keg']; 
		$pagu_awal=$_POST['pagu_awal']; 
		$nokeg=$_POST['nokeg']; 
		$pptk=$_POST['pptk']; 
		
  $query = "UPDATE `kegiatan` SET `nm_keg` = '$nm_keg',`pagu_awal` = '$pagu_awal',`nokeg` = '$nokeg',`pptk` = '$pptk' WHERE  `id` =  '$id'";
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
  $query = "DELETE FROM `kegiatan` WHERE `id` = '$id'";
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
  $nm_keg=$one[0]["nm_keg"]; 
		$pagu_awal=$one[0]["pagu_awal"]; 
		$nokeg=$one[0]["nokeg"]; 
		$pptk=$one[0]["pptk"]; 
		
   $query = "INSERT INTO `kegiatan` (`nm_keg`,`pagu_awal`,`nokeg`,`pptk`)
VALUES ('$nm_keg','$pagu_awal','$nokeg','$pptk')";
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
