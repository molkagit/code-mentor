<?php
session_start();
require 'process.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    try {
        $processor = new process();
        $processor->processInfo($_POST);

        // Save to database 
        // $processor->saveDB();

        $_SESSION['success'] = "Form submitted with success!";
        header('Location: success.html'); 
        exit();
    } catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
        header('Location: form.php');
        exit(); 
    }
}
?>
