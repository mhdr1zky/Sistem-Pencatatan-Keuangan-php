<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM trlog";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'log_id' => $data['log_id'],
		'log_status' => $data['log_status'],
		'log_nama' => $data['log_nama'],
		'log_keg' => $data['log_keg'],
		'tgl_ba' => $data['tgl_ba'],
		'log_nominal' => $data['log_nominal'],
		'log_ppn' => $data['log_ppn'],
		'log_pph' => $data['log_pph'],
		'log_ket' => $data['log_ket'],
		'log_archive' => $data['log_archive'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `trlog` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'log_id' => $data['log_id'], 
		'log_status' => $data['log_status'], 
		'log_nama' => $data['log_nama'], 
		'log_keg' => $data['log_keg'], 
		'tgl_ba' => $data['tgl_ba'], 
		'log_nominal' => $data['log_nominal'], 
		'log_ppn' => $data['log_ppn'], 
		'log_pph' => $data['log_pph'], 
		'log_ket' => $data['log_ket'], 
		'log_archive' => $data['log_archive'], 
		
    );
  }
return $datas;
}

function Insert(){
  $log_id=$_POST['log_id']; 
		$log_status=$_POST['log_status']; 
		$log_nama=$_POST['log_nama']; 
		$log_keg=$_POST['log_keg']; 
		$tgl_ba=$_POST['tgl_ba']; 
		$log_nominal=$_POST['log_nominal']; 
		$log_ppn=$_POST['log_ppn']; 
		$log_pph=$_POST['log_pph']; 
		$log_ket=$_POST['log_ket']; 
		$log_archive=$_POST['log_archive']; 
		
  $query = "INSERT INTO `trlog` (`id`,`log_id`,`log_status`,`log_nama`,`log_keg`,`tgl_ba`,`log_nominal`,`log_ppn`,`log_pph`,`log_ket`,`log_archive`)
VALUES (NULL,'$log_id','$log_status','$log_nama','$log_keg','$tgl_ba','$log_nominal','$log_ppn','$log_pph','$log_ket','$log_archive')";
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
  $log_id=$_POST['log_id']; 
		$log_status=$_POST['log_status']; 
		$log_nama=$_POST['log_nama']; 
		$log_keg=$_POST['log_keg']; 
		$tgl_ba=$_POST['tgl_ba']; 
		$log_nominal=$_POST['log_nominal']; 
		$log_ppn=$_POST['log_ppn']; 
		$log_pph=$_POST['log_pph']; 
		$log_ket=$_POST['log_ket']; 
		$log_archive=$_POST['log_archive']; 
		
  $query = "UPDATE `trlog` SET `log_id` = '$log_id',`log_status` = '$log_status',`log_nama` = '$log_nama',`log_keg` = '$log_keg',`tgl_ba` = '$tgl_ba',`log_nominal` = '$log_nominal',`log_ppn` = '$log_ppn',`log_pph` = '$log_pph',`log_ket` = '$log_ket',`log_archive` = '$log_archive' WHERE  `id` =  '$id'";
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
  $query = "DELETE FROM `trlog` WHERE `id` = '$id'";
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
  $log_id=$one[0]["log_id"]; 
		$log_status=$one[0]["log_status"]; 
		$log_nama=$one[0]["log_nama"]; 
		$log_keg=$one[0]["log_keg"]; 
		$tgl_ba=$one[0]["tgl_ba"]; 
		$log_nominal=$one[0]["log_nominal"]; 
		$log_ppn=$one[0]["log_ppn"]; 
		$log_pph=$one[0]["log_pph"]; 
		$log_ket=$one[0]["log_ket"]; 
		$log_archive=$one[0]["log_archive"]; 
		
   $query = "INSERT INTO `trlog` (`log_id`,`log_status`,`log_nama`,`log_keg`,`tgl_ba`,`log_nominal`,`log_ppn`,`log_pph`,`log_ket`,`log_archive`)
VALUES ('$log_id','$log_status','$log_nama','$log_keg','$tgl_ba','$log_nominal','$log_ppn','$log_pph','$log_ket','$log_archive')";
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
