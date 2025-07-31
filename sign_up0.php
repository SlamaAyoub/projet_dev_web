<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_sign_up.css">
    <title>Document</title>
</head>
<body>
    <div class="page1">
        <div class="head">
            <ul>
                <li><img class="logo" src="logo.jpg" alt=""></li>
                <li class="name"><p>Top Menu</p></li>
                <li class="media"><a  href=""><img src="fecbook.png" alt=""></a></li>
                <li class="media"><a  href=""><img src="insta.jpg" alt=""></a></li>
                <li class="media"><a  href=""><img src="what.png" alt=""></a></li>
                <li class="media"><p style="font-size: 18px;">+216 77 777 777</p></li>
                <li style="margin-top:15px ;"><a href="login.html" class="login">Login</a></li>
                <li style="margin-top:15px ;"><a href="sign-up.html" class="sign">Sign_up</a></li>
            </ul> 
        </div>
        <!--<div class="head">
            <div><img class="logo" src="logo.jpg" alt=""></div>
            <div><span style="font-weight: bold;margin: 0 400px 0 100px;">Top menu</span></div>
            <div><a href=""><img src="fecbook.png" alt=""></a></div>
            <div><a href=""><img src="insta.jpg" alt=""></a></div>
            <div><a href=""><img src="what.png" alt=""></a></div>
            <div><a href="login.html" class="login">login</a></div>
            <div><a href="sign-up.html" class="sign">sign up</a></div>
        </div>-->
        <div class="fime">
            <div class="Welcome">
                <h2>Welcome</h2>
                <pre>
                    une restaurent famillaire avec
                                  plusieur et bon menu
                </pre>
            </div>
            <div class="main">
                <ul>
                    <li><a href="revervation_par_commande.html">reservation une commande</a></li>
                    <li><a href="revervation_par_table.html">reservation une table</a></li>
                    </ul>
            </div>
    
        </div>
       
        
    </div>
    <div class="login">
    <a class="sortie" href="index.php">X</a>
        <form action="sign_up.php" method="post">
            <h2>Sign up</h2>
            <?php 
                if(isset($user_error)){
                    echo $user_error;
                }
            ?>
            <?php
                if(isset($count_error)){
                  echo $count_error;
                }
            ?>
            <input type="text" placeholder="Username" name="username">
            <?php 
                if(isset($email_error)){
                    echo $email_error;
                }
            ?>
            <input type="text" placeholder="telephone ou email" name="telephone_ou_email">
            <?php 
                if(isset($password_error)){
                    echo $password_error;
                }
            ?>
            <input type="password" id="" placeholder="Create password" name="password"> 
            <?php 
                if(isset($confirm_password_error)){
                    echo $confirm_password_error;
                }
            ?>
            <input type="password" name="confirm_password" id="" placeholder="Confirm password">
            <input type="submit" class="submit" value="Sign up" name="submit">
            <p>dont have an account? <a href="login.html">Login</a></p>
        </form>
    </div>
</body>
</html>