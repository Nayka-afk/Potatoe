<?php
require_once('includes/header.php');
require_once('includes/sidebar.php');
if(!isset($_SESSION['user_id'])){
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    if($email&&$password){
        $result=$db->query("SELECT id FROM users WHERE email='$email'");
        if($result->fetchColumn()){
            $select=$db->query("SELECT * FROM users WHERE email='$email'");
            $result=$select->fetch(PDO::FETCH_OBJ);
            $_SESSION['user_id']=$result->id;
            $_SESSION['user_name']=$result->username;
            $_SESSION['user_email']=$result->email;
            $_SESSION['user_password']=$result->password;
            header('Location: my_account.php');

        }else{
            echo'<br/><h3 style="color:red;">WRONG EMAIL</h3>';
        }
    }else{
        echo'<br/><h3 style="color:red;">PLEASE FILL ALL THE VOIDS</h3>';
    }
}
?>
</br>
<h1>LOGIN</h1>
<form action="" method="POST">
    <h4>Email Adress: <input type="email" name="email" /></h4>
    <h4>Password: <input type="password" name="password" /></h4>
    <input type="submit" name="submit" />
</form>
</br>
<a href="register.php">REGISTER</a>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<?php
}else{
    header('Location:my_account.php');
}



require_once('includes/footer.php');
?>