<?php
session_start();
$user='ADMIN';
$pass='192837465';
if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $password = $_POST['password'];
    if($username&&$password){
        if($username==$user&&$password=$pass){
            echo 'SUCCESS!';
            $_SESSION['username']=$username;
            header('Location: admin.php');
        }
        else{
            echo "WRONG USERNAME OR PASSWORD";
        }
    }
        else{
            echo "FILL ALL THE SPACES!";
        }
    }   
    


?>

<link href="../css/bootstrap.css" type="text/css" rel="stylesheet"/> 
<link href="../css/main.css" type="text/css" rel="stylesheet"/>
<h1>Administration - CONNEXION</h1>
<form action="" method="POST">
    <h3>USERNAME :</h3><input type="text" name="username"/><br/><br/>
    <h3>PASSWORD :</h3><input type="password" name="password"/><br/><br/>
    <input type="submit" name="submit"/><br/><br/>
</form>