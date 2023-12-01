<?php
include_once "../db.php";
dd($_POST);
$data=[];
$data['text']=$_POST['subject'];
$data['subject_id']=0;// =0是主題=1選項
$data['count']=0;
$data['sh']=1;//上傳後顯示不顯示

$Que->save($data);
foreach($_POST['opt'] as $opt){
    $data=[];
    $subject_id=$Que->find(['text'=>$_POST['subject']])['id'];
    $data['text']=$opt;
    $data['subject_id']=$subject_id;
    $data['count']=0;
    $data['sh']=1;
    $Que->save($data);
}
header("location:../admin.php");
?>