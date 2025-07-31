<?php
include('connexion.php');
if(isset($_POST['submit'])){
    $username=htmlspecialchars(mysqli_real_escape_string($connect, trim(strtolower($_POST['username']))));
    $date=$_POST['date'];
    $heure=$_POST['heure'];
    $num_persone=$_POST['num_persone'];
    $num_telephone=$_POST['num_telephone'];
    $email=$_POST['email'];
    $commantere=$_POST['commantere'];

    if(empty($username)){
        $user_error='<p id="error">doit etre remplir username>';
        $err_s=1;
    }elseif(strlen($username)<3){
        $user_error = '<p id="error">username not correct!</p>';
        $err_s=1;
    }elseif(filter_var($username, FILTER_VALIDATE_INT)){
        $user_error='<p id="error">please enter username!</p>';
        $err_s=1;
    }

    if(empty($date)){
        $date_error='<p id="error">doit etre remplir date>';
        $err_s=1;
    }elseif(!filter_var($date,FILTER_VALIDATE_DATE)){
        $date_error='<p id="error">please enter your date!</p>';
        $err_s=1;
    }elseif ($date < date('Y-m-d')) {
        $date_error = '<p id="error">please enter your date!</p>';
        $err_s = 1;
    }
    if(empty($heure)){
        $heure_error='<p id="error">doit etre remplir heure>';
        $err_s=1;
    }
    if(empty($num_persone)){
        $num_persone_error='<p id="error">doit etre remplir num_persone>';
        $err_s=1;
    }elseif(!filter_var($num_persone,FILTER_VALIDATE_INT)){
        $num_persone_error='<p id="error">please enter your email!</p>';
        $err_s=1;
    }
    if(empty($num_telephone)){
        $num_telephone_error='<p id="error">doit etre remplir num_telephone>';
        $err_s=1;
    }
    if(empty($email)){
        $email_error='<p id="error">doit etre remplir email>';
        $err_s=1;
    }elseif(!filter_var($telephone_ou_email,FILTER_VALIDATE_EMAIL)){
        $email_error='<p id="error">please enter your email!</p>';
        $err_s=1;
        include('resevration_par_table.php');
    }
    $sql="SELECT * FROM reservation_table where username='$username' and date='$date' and heure='$heure' and num_persone='$num_persone' and num_telephone='$num_telephone' and email='$email'";
    $result=mysqli_query($connect,$sql);
    $count_row=mysqli_num_rows($result);
    if($err_s !=1 && $count_row === 0){
        $sql1="INSERT INTO reservation_table ( `username`, `date`, `heure`,`num_persone`, `num_telephone`, `email`, `commentere`) VALUES ('$username','$date','$heure','$num_persone','$num_telephone','$email','$commentere')";
        $result=mysqli_query($connect,$sql1);     
    }else{
        header('location:resevation_par_table.php');
        exit();
    }

}
?>