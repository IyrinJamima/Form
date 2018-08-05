<?php
/*ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);*/
include('db.php');
if(isset($_REQUEST['submit'])!=''){
        if($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']==''){
            echo "please fill the empty field.";
        }else{
            $sql="INSERT INTO login (name,email,password) values ('".$_REQUEST['name']."','".$_REQUEST['email']."', '".$_REQUEST['password']."')";
?>

