<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM rekap";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('rekp_id' => $data['rekp_id'],
		'nama_rkp' => $data['nama_rkp'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `rekap` WHERE  `rekp_id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('rekp_id' => $data['rekp_id'], 
		'nama_rkp' => $data['nama_rkp'], 
		
    );
  }
return $datas;
}

function Insert(){
  $nama_rkp=$_POST['nama_rkp']; 
		
  $query = "INSERT INTO `rekap` (`rekp_id`,`nama_rkp`)
VALUES (NULL,'$nama_rkp')";
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
  $nama_rkp=$_POST['nama_rkp']; 
		
  $query = "UPDATE `rekap` SET `nama_rkp` = '$nama_rkp' WHERE  `rekp_id` =  '$id'";
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
  $query = "DELETE FROM `rekap` WHERE `rekp_id` = '$id'";
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
  $nama_rkp=$one[0]["nama_rkp"]; 
		
   $query = "INSERT INTO `rekap` (`nama_rkp`)
VALUES ('$nama_rkp')";
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
  Update($_POST['rekp_id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['rekp_id']);
}
else if(isset($_POST['duplicate'])){
  Duplicate($_POST['rekp_id']);
}
?>
