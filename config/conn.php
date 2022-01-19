
<?php
error_reporting(E_ALL & ~E_NOTICE);
date_default_timezone_set('Asia/Jakarta');
define ("HOST","localhost");
define ("DB_USER","root");
define ("DB_PASSWORD","");
define ("DB_NAME","sku2022");
define ("BASE_URL","\lab\Sistem-Pencatatan-Keuangan");

function Connect(){
    $connect = mysqli_connect(HOST, DB_USER, DB_PASSWORD,DB_NAME);
    if($connect){
        return $connect;
    } else {
      return FALSE;
    }
}

function dropdown($table=null,$order=null,$onama=null,$ovalue=null,$set=null){

$query = mysqli_query(Connect(),"select * from $table order by $order") or die (mysql_error());
while ($row = mysqli_fetch_array($query)) {
$alias= strip_tags($row[$onama]);
$val= strip_tags($row[$ovalue]);
?>

<option value="<?= $val;?>" <?php if ($set == $val) {
  echo "selected";
} else {
}
?>><?PHP echo $alias;?></option>
<?php }



}

function getsub($table,$tb_id,$id,$oname){
//nama tabel,tb_id yang dipanggil $id dari foreach oname nama kolom yang di echo
 $query = mysqli_query(Connect(),"SELECT * FROM  $table WHERE $tb_id=$id");
  if(mysqli_num_rows($query) != 0){
    while($row = mysqli_fetch_assoc($query)){
       echo $row[$oname];
  }

    }
}

?>
