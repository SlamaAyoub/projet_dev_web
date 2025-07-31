<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="csssign.css">
</head>
<body>
        <?php
        include 'connexion.php';
        if(isset($_POST['submit'])){
            $username = htmlspecialchars(mysqli_real_escape_string($connect, trim(strtolower($_POST['username']))));
            $telephone_ou_email=$_POST['telephone_ou_email'];
            $password=$_POST['password'];
            $confirm_password =$_POST['confirm_password'];
            if(empty($username)){
                $user_error = '<p id="error">please can I write your name!</p>';
                $err_s=1;
            }elseif(strlen($username)<3){
                $user_error = '<p id="error">username not correct!</p>';
                $err_s=1;
            }elseif(filter_var($username, FILTER_VALIDATE_INT)){
                $user_error='<p id="error">please enter username!</p>';
                $err_s=1;
            }
            
            if(empty($telephone_ou_email)){
                $email_error='<p id="error">please can I write your email or number phone!</p>';
                $err_s=1;
            }elseif(!filter_var($telephone_ou_email,FILTER_VALIDATE_EMAIL)){
                $email_error='<p id="error">please enter your email!</p>';
                $err_s=1;
            }
            
            if(empty($password)){
                $password_error='<p id="error">please can I write your password!</p>';
                $err_s=1;
            }elseif(strlen($password)<8){
                $password_error='<p id="error">password must be at least 8 characters long</p>';
                $err_s=1;
            }
            
            if(empty($confirm_password)){
                $confirm_password_error='<p id="error">please can I write your confirm password!</p>';
                $err_s=1;
                
            }
            $sql = "SELECT * FROM sign_up WHERE username = '$username' AND email_telephone = '$telephone_ou_email'";
            $resultas=mysqli_query($connect,$sql);
            $count=mysqli_num_rows($resultas);
            if($count != 0){
                    $count_error='<p id="error">sorry user already exist , change another one !</p>';
            }elseif($count ==0){
                if($password===$confirm_password && $err_s==0){
                    $hash=password_hash($password,PASSWORD_DEFAULT);
                    $sql1="INSERT INTO sign_up ( `username`, `email_telephone`, `password`) VALUES ('$username','$telephone_ou_email','$hash')";
                    $result=mysqli_query($connect,$sql1);
                    header('location:login.php');
            
                }else{
                    
                    include('sign_up0.php');
                }
            }
        }
        ?>
 

</body>
</html>