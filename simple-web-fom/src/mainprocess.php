<?php
session_start();
require 'process.php';
//main traitement :
if ($_SERVER['REQUEST_METHOD']=='POST'){
try {
    $processor= new process ();
    $processor->processInfo($_POST);
    //to add db 
    //$processor=saveDB();
    $_SESSION['success']="form submited with sucess!";
    header('location :successPAGE.php');
    exit();
}
catch(Exception $e){
    $_SESSION['error']=$e->getMessage();
    header('Location:form.php');
    exit(); 
}
}
?>