<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM transaksi";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'tr_status' => $data['tr_status'],
		'tr_nama' => $data['tr_nama'],
		'tr_subkeg' => $data['tr_subkeg'],
		'tgl_ba' => $data['tgl_ba'],
		'tr_nominal' => $data['tr_nominal'],
		'tr_ppn' => $data['tr_ppn'],
		'tr_pph' => $data['tr_pph'],
		'tr_ket' => $data['tr_ket'],
		'updoc' => $data['updoc'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `transaksi` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'tr_status' => $data['tr_status'], 
		'tr_nama' => $data['tr_nama'], 
		'tr_subkeg' => $data['tr_subkeg'], 
		'tgl_ba' => $data['tgl_ba'], 
		'tr_nominal' => $data['tr_nominal'], 
		'tr_ppn' => $data['tr_ppn'], 
		'tr_pph' => $data['tr_pph'], 
		'tr_ket' => $data['tr_ket'], 
		'updoc' => $data['updoc'], 
		
    );
  }
return $datas;
}

function Inrek(){
    $tr_status=$_POST['tr_status']; 
    $tr_nama=$_POST['tr_nama']; 
    $tr_subkeg=$_POST['tr_subkeg']; 
    $tgl_ba=$_POST['tgl_ba']; 
    $tr_nominal=$_POST['tr_nominal']; 
    $tr_ppn=$_POST['tr_ppn']; 
    $tr_pph=$_POST['tr_pph']; 
    $tr_ket=$_POST['tr_ket']; 
    $updoc=$_POST['updoc']; 

  $query = "INSERT INTO `transaksi` (`id`,`tr_status`,`tr_nama`,`tr_subkeg`,`tgl_ba`,`tr_nominal`,`tr_ppn`,`tr_pph`,`tr_ket`,`updoc`)
VALUES (NULL,'$tr_status','$tr_nama','$tr_subkeg','$tgl_ba','$tr_nominal','$tr_ppn','$tr_pph','$tr_ket','$updoc')";
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

function Insert(){
  $tr_status=$_POST['tr_status']; 
		$tr_nama=$_POST['tr_nama']; 
		$tr_subkeg=$_POST['tr_subkeg']; 
		$tgl_ba=$_POST['tgl_ba']; 
		$tr_nominal=$_POST['tr_nominal']; 
		$tr_ppn=$_POST['tr_ppn']; 
		$tr_pph=$_POST['tr_pph']; 
		$tr_ket=$_POST['tr_ket']; 
		$updoc=$_POST['updoc']; 
		
  $query = "INSERT INTO `transaksi` (`id`,`tr_status`,`tr_nama`,`tr_subkeg`,`tgl_ba`,`tr_nominal`,`tr_ppn`,`tr_pph`,`tr_ket`,`updoc`)
VALUES (NULL,'$tr_status','$tr_nama','$tr_subkeg','$tgl_ba','$tr_nominal','$tr_ppn','$tr_pph','$tr_ket','$updoc')";
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
  $tr_status=$_POST['tr_status']; 
		$tr_nama=$_POST['tr_nama']; 
		$tr_subkeg=$_POST['tr_subkeg']; 
		$tgl_ba=$_POST['tgl_ba']; 
		$tr_nominal=$_POST['tr_nominal']; 
		$tr_ppn=$_POST['tr_ppn']; 
		$tr_pph=$_POST['tr_pph']; 
		$tr_ket=$_POST['tr_ket']; 
		$updoc=$_POST['updoc']; 
		
  $query = "UPDATE `transaksi` SET `tr_status` = '$tr_status',`tr_nama` = '$tr_nama',`tr_subkeg` = '$tr_subkeg',`tgl_ba` = '$tgl_ba',`tr_nominal` = '$tr_nominal',`tr_ppn` = '$tr_ppn',`tr_pph` = '$tr_pph',`tr_ket` = '$tr_ket',`updoc` = '$updoc' WHERE  `id` =  '$id'";
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
  $query = "DELETE FROM `transaksi` WHERE `id` = '$id'";
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
function filter($id){
  if (empty($id)) {
    $query = "SELECT * FROM  `transaksi`";
  }
  if (!empty($id)) {
     $query = "SELECT * FROM  `transaksi` WHERE  `tr_status` =  '$id'";
  }

  $exe = mysqli_query(Connect(),$query);
  return $exe;
  
}


function Duplicate($id){
    $one = GetOne($id);
  $tr_status=$one[0]["tr_status"]; 
		$tr_nama=$one[0]["tr_nama"]; 
		$tr_subkeg=$one[0]["tr_subkeg"]; 
		$tgl_ba=$one[0]["tgl_ba"]; 
		$tr_nominal=$one[0]["tr_nominal"]; 
		$tr_ppn=$one[0]["tr_ppn"]; 
		$tr_pph=$one[0]["tr_pph"]; 
		$tr_ket=$one[0]["tr_ket"]; 
		$updoc=$one[0]["updoc"]; 
		
   $query = "INSERT INTO `transaksi` (`tr_status`,`tr_nama`,`tr_subkeg`,`tgl_ba`,`tr_nominal`,`tr_ppn`,`tr_pph`,`tr_ket`,`updoc`)
VALUES ('$tr_status','$tr_nama','$tr_subkeg','$tgl_ba','$tr_nominal','$tr_ppn','$tr_pph','$tr_ket','$updoc')";
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

function getexist($table,$target_col,$input){
$query ="SELECT * FROM $table WHERE $target_col = $input";
if(mysqli_num_rows(Connect(),$query) != 0){
    while($row = mysqli_fetch_assoc($query)){
       echo "ada";
  }
}
if(mysqli_num_rows($query) == 0){
    while($row = mysqli_fetch_assoc($query)){
       echo "tidak ada";
  }
}

}

if(isset($_POST['insert'])){
  Inrek();
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
