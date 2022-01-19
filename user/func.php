<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM user";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('user_id' => $data['user_id'],
		'user_nama' => $data['user_nama'],
		'user_username' => $data['user_username'],
		'user_password' => $data['user_password'],
		'user_foto' => $data['user_foto'],
		'user_level' => $data['user_level'],
		'setting' => $data['setting'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `user` WHERE  `user_id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('user_id' => $data['user_id'], 
		'user_nama' => $data['user_nama'], 
		'user_username' => $data['user_username'], 
		'user_password' => $data['user_password'], 
		'user_foto' => $data['user_foto'], 
		'user_level' => $data['user_level'], 
		'setting' => $data['setting'], 
		
    );
  }
return $datas;
}

function Insert(){
  $user_nama=$_POST['user_nama']; 
		$user_username=$_POST['user_username']; 
		$user_password=$_POST['user_password']; 
		$user_foto=$_POST['user_foto']; 
		$user_level=$_POST['user_level']; 
		$setting=$_POST['setting']; 
		
  $query = "INSERT INTO `user` (`user_id`,`user_nama`,`user_username`,`user_password`,`user_foto`,`user_level`,`setting`)
VALUES (NULL,'$user_nama','$user_username','$user_password','$user_foto','$user_level','$setting')";
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
  $user_nama=$_POST['user_nama']; 
		$user_username=$_POST['user_username']; 
		$user_password=$_POST['user_password']; 
		$user_foto=$_POST['user_foto']; 
		$user_level=$_POST['user_level']; 
		$setting=$_POST['setting']; 
		
  $query = "UPDATE `user` SET `user_nama` = '$user_nama',`user_username` = '$user_username',`user_password` = '$user_password',`user_foto` = '$user_foto',`user_level` = '$user_level',`setting` = '$setting' WHERE  `user_id` =  '$id'";
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
  $query = "DELETE FROM `user` WHERE `user_id` = '$id'";
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
  $user_nama=$one[0]["user_nama"]; 
		$user_username=$one[0]["user_username"]; 
		$user_password=$one[0]["user_password"]; 
		$user_foto=$one[0]["user_foto"]; 
		$user_level=$one[0]["user_level"]; 
		$setting=$one[0]["setting"]; 
		
   $query = "INSERT INTO `user` (`user_nama`,`user_username`,`user_password`,`user_foto`,`user_level`,`setting`)
VALUES ('$user_nama','$user_username','$user_password','$user_foto','$user_level','$setting')";
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
  Update($_POST['user_id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['user_id']);
}
else if(isset($_POST['duplicate'])){
  Duplicate($_POST['user_id']);
}
?>
