<?php
include_once "../db.php";

if(isset($_GET['id'])){
     $Que->del($_GET['id']); // 刪除主題
     $Que->del(['subject_id'=>$_GET['id']]);  // 刪除選項
}

header("location:../admin.php");
?>