<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="csssign.css">
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    include "connexion.php";
    if(isset($_POST['password']) && isset($_POST['telephone_ou_email'])){
        $telephone_ou_email = $_POST['telephone_ou_email'];
        $password = $_POST['password'];
        $hash=password_hash($password,PASSWORD_DEFAULT);

        if(empty($telephone_ou_email)){
            $email_error = '<p id="error">Please enter your email or phone number.</p>';
            $err_s = 1;
        }

        if(empty($password)){
            $password_error = '<p id="error">Please enter your password.</p>';
            $err_s = 1;
            include('login.php');
        }

        if(!isset($err_s)){
            $sql = "SELECT * FROM sign_up WHERE email_telephone = '$telephone_ou_email' and password='$hash' limit 1 ";
            $result = mysqli_query($connect, $sql);
            $count_row=mysqli_num_rows($result);
            $row = mysqli_fetch_assoc($result);
            if($count_row!=0){
                if($row['email_telephone'] === $telephone_ou_email && password_verify($password, $row['password'])){
                    
                    $_SESSION['username']=$row['username'];
                    $_SESSION['id']=$row['id'];
                  //  $_SESSION['email_telephone']=$row['email_telephone'];
                    header('location: index.php');
                    exit();
                }
            }else{
                $information_error = '<p id="error">Information is not correct.</p>';
                include('login.php');
                exit();
            }
        }
    }
    ?>

</body>
</html>
</body>
</html>