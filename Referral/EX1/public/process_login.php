<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!isset($_SESSION))
{
    session_start();   
}
if (isset($_POST['login'])){
    
    $_SESSION['login'] = checklogin($_POST['form-username'], $_POST['form-password']);
    
}

header("Location: ../index.php");

function checkLogin($username, $password)
{
    $login = false;
    //open the file
    $file = fopen("../login.txt", "r") or die("Unable to open the file");
    //check the username and password matches the first line
    
    $storedUserName = fgets($file);
    $storedPassword = fgets($file);
    
    if ((trim($username) == trim($storedUserName)) && (trim($password) == trim($storedPassword)))
    {
        $login = true;
        $_SESSION["Username"] = $username;  
    }
    
    fclose($file);
    return $login;
    
}

?>

