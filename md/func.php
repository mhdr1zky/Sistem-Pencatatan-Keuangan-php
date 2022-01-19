<?php

require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM md";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('m_id' => $data['m_id'],
		'm_nopol' => $data['m_nopol'],
		'm_merktype' => $data['m_merktype'],
		'm_cc' => $data['m_cc'],
		'm_tahun' => $data['m_tahun'],
		'm_jenismodel' => $data['m_jenismodel'],
		'm_pemegang' => $data['m_pemegang'],
		'stnk' => $data['stnk'],
		'keterangan' => $data['keterangan'],
		'type_bbm' => $data['type_bbm'],
		'last_up' => $data['last_up'],
		'pemegang_sk' => $data['pemegang_sk'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `md` WHERE  `m_id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('m_id' => $data['m_id'], 
		'm_nopol' => $data['m_nopol'], 
		'm_merktype' => $data['m_merktype'], 
		'm_cc' => $data['m_cc'], 
		'm_tahun' => $data['m_tahun'], 
		'm_jenismodel' => $data['m_jenismodel'], 
		'm_pemegang' => $data['m_pemegang'], 
		'stnk' => $data['stnk'], 
		'keterangan' => $data['keterangan'], 
		'type_bbm' => $data['type_bbm'], 
		'last_up' => $data['last_up'], 
		'pemegang_sk' => $data['pemegang_sk'], 
		
    );
  }
return $datas;
}

function Insert(){
  $m_nopol=$_POST['m_nopol']; 
		$m_merktype=$_POST['m_merktype']; 
		$m_cc=$_POST['m_cc']; 
		$m_tahun=$_POST['m_tahun']; 
		$m_jenismodel=$_POST['m_jenismodel']; 
		$m_pemegang=$_POST['m_pemegang']; 
		$stnk=$_POST['stnk']; 
		$keterangan=$_POST['keterangan']; 
		$type_bbm=$_POST['type_bbm']; 
		$last_up=$_POST['last_up']; 
		$pemegang_sk=$_POST['pemegang_sk']; 
		$rand = rand();
    $allowed =  array('gif','png','jpg','jpeg');
    $filename = $_FILES['stnk']['name'];
  

if (isset($filename)) {
move_uploaded_file($_FILES['stnk']['tmp_name'], 'stnk/'.$rand.'_'.$filename);
$stnk = $rand.'_'.$filename;
// var_dump($stnk);
// die();
$query = "INSERT INTO `md` (`m_id`,`m_nopol`,`m_merktype`,`m_cc`,`m_tahun`,`m_jenismodel`,`m_pemegang`,`stnk`,`keterangan`,`type_bbm`,`last_up`,`pemegang_sk`)
VALUES (NULL,'$m_nopol','$m_merktype','$m_cc','$m_tahun','$m_jenismodel','$m_pemegang','$stnk','$keterangan','$type_bbm','$last_up','$pemegang_sk')";
} else{
  $query = "INSERT INTO `md` (`m_id`,`m_nopol`,`m_merktype`,`m_cc`,`m_tahun`,`m_jenismodel`,`m_pemegang`,`keterangan`,`type_bbm`,`last_up`,`pemegang_sk`)
VALUES (NULL,'$m_nopol','$m_merktype','$m_cc','$m_tahun','$m_jenismodel','$m_pemegang','$keterangan','$type_bbm','$last_up','$pemegang_sk')";
}

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
  $m_nopol=$_POST['m_nopol']; 
		$m_merktype=$_POST['m_merktype']; 
		$m_cc=$_POST['m_cc']; 
		$m_tahun=$_POST['m_tahun']; 
		$m_jenismodel=$_POST['m_jenismodel']; 
		$m_pemegang=$_POST['m_pemegang']; 
		$stnk=$_POST['stnk']; 
		$keterangan=$_POST['keterangan']; 
		$type_bbm=$_POST['type_bbm']; 
		$last_up=$_POST['last_up']; 
		$pemegang_sk=$_POST['pemegang_sk']; 
		
  $query = "UPDATE `md` SET `m_nopol` = '$m_nopol',`m_merktype` = '$m_merktype',`m_cc` = '$m_cc',`m_tahun` = '$m_tahun',`m_jenismodel` = '$m_jenismodel',`m_pemegang` = '$m_pemegang',`stnk` = '$stnk',`keterangan` = '$keterangan',`type_bbm` = '$type_bbm',`last_up` = '$last_up',`pemegang_sk` = '$pemegang_sk' WHERE  `m_id` =  '$id'";
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
  $query = "DELETE FROM `md` WHERE `m_id` = '$id'";
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
  $m_nopol=$one[0]["m_nopol"]; 
		$m_merktype=$one[0]["m_merktype"]; 
		$m_cc=$one[0]["m_cc"]; 
		$m_tahun=$one[0]["m_tahun"]; 
		$m_jenismodel=$one[0]["m_jenismodel"]; 
		$m_pemegang=$one[0]["m_pemegang"]; 
		$stnk=$one[0]["stnk"]; 
		$keterangan=$one[0]["keterangan"]; 
		$type_bbm=$one[0]["type_bbm"]; 
		$last_up=$one[0]["last_up"]; 
		$pemegang_sk=$one[0]["pemegang_sk"]; 
		
   $query = "INSERT INTO `md` (`m_nopol`,`m_merktype`,`m_cc`,`m_tahun`,`m_jenismodel`,`m_pemegang`,`stnk`,`keterangan`,`type_bbm`,`last_up`,`pemegang_sk`)
VALUES ('$m_nopol','$m_merktype','$m_cc','$m_tahun','$m_jenismodel','$m_pemegang','$stnk','$keterangan','$type_bbm','$last_up','$pemegang_sk')";
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
  Update($_POST['m_id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['m_id']);
}
else if(isset($_POST['duplicate'])){
  Duplicate($_POST['m_id']);
}
?>
