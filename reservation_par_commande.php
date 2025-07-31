<?php
include('connexion.php');
$sql="SELECT * from reservation_commande";
$result=mysqli_connect($connect,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reservation_par_commande.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="nav_bar">
            <ul>
                <li><img class="logo" src="logo.jpg" alt=""></li>
                <li class="name"><p>Top Menu</p></li>
                <li>
                    <input type="text" name="recherche" placeholder="Search..">
                    <input type="image" name="searsh" src="searsh.png" alt="">
                </li>
                <li class="media"><a  href=""><img src="fecbook.png" alt=""></a></li>
                <li class="media"><a  href=""><img src="insta.jpg" alt=""></a></li>
                <li class="media"><a  href=""><img src="what.png" alt=""></a></li>
                <li class="media"><p style="font-size: 18px;">+216 77 777 777</p></li>
                <li><p class="symbole">M</p></li>
                <li class="panier"><img src="panier1.png" alt=""></li>
            </ul>
        </div>
    </div>
    <?php
    if(isset($_POST['recherche']) && isset($_POST['searsh'])){
        $recherche=$_POST['recherche'];
        $sql="SELECT * from reservation_commande where nom link '%$recherche%'";
        $result=mysqli_connect($connect,$sql);
        $count_row=mysqli_num_rows($result);
        if($count_row ==0){
            $recherche_error='<p id="error">this food not exist !</p>';
            $err_s=1
        }
    }
    ?>
    <div class="head">
        <div class="colunes">
            <form action="">
                <label  for="leiu">leiu</label><br>
                <select>
                    <option value="Tunis">Tunis</option>
                    <option value="Sousse">Sousse</option>
                    <option value="Sfax">Sfax</option>
                </select><br>
                <hr>
                <label type="nature" for="">nature</label><br>
                <input type="checkbox" name="sale" id="">
                <label for="sale">sale</label><br>
                <input type="checkbox" name="sucre" id="">
                <label for="sucre">sucre</label><br>
                <input type="checkbox" name="boissen" id="">
                <label for="boissen">boissen</label><br>
                <hr>
                <label type="prix" for="prix">prix</label><br>
                <input type="range" min="4" max="60" step="1" value="60">
                <label for="">DT</label>
                
            </form>
        </div>
        <div class="bar"></div>
        <div class="menu">
            <p>
                Menu
            </p>
            <div>
                <?php
                if($err_s !=1){
                    while($ligne=mysqli_fetch_assoc($result)){
                ?>
                <section>
                    <img src="<?php echo $ligne['photo']?>" alt="">
                </section>
                <div>
                    <img src="images9.png" alt="">
                    <p><?php echo $ligne['nature']?></p>
                    <p class="prix"><?php echo $ligne['prix']?></p>
                </div>
                <div>
                    <img src="images (1).jpg" alt="">
                    <p><?php echo $ligne['nom']?> </p>
                </div>
                <div>
                    <img src="téléchargement.png" alt="">
                    <p><?php echo $ligne['leiu']?></p>
                </div>
                <div>
                    <input class="submit" type="submit" value="ajouter">
                    <input class="number" type="number" name="" id="" max="15" value="1">
                </div>
                <?php
                
                    }
                }
                if(isset($err_s)){
                    echo $recherche_error ;
                }
                ?>
            </div>

           
        </div>
    </div>
    <footer>
        <div class="footer">
            <img class="logo" src="logo.jpg" alt="">
            <p>WE ARE SOCIAL</p>
            <div>
                <a href="https://www.fecbook.com/"><img src="FEC3.png" alt=""></a>
                <a href="https://www.instagram.com/"><img src="ins2.png" alt=""></a>
                <a href="https://www.whatsapp.com/"><img src="WH3.jpg" alt=""></a>
                <a href="https://www.google.com/"><img src="goo2.png" alt=""></a>
            </div>
            <hr>
            <p>&copy;2024- <span>Top Menu</span> All Right Reseved </p>
        </div>
    </footer>
</body>
</html>