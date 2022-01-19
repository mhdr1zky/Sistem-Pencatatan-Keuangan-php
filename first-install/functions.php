<?php
function Go2(){
    header("location:../generate.php");
}

if(isset($_POST['go2'])){
  Go2();
}
?>

