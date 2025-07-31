<?php
session_start();
include('connexion.php');
if(isset($_SESSION['id']) && isset($_SESSION['username'])){
    $user=$_SESSION['username'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Menu</title>
    <link rel="stylesheet" href="style_restaurent.css">
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
                <li style="margin-top:15px ;"><a href="login.php" class="login">Login</a></li>
                <li style="margin-top:15px ;"><a href="sign_up0.php" class="sign">Sign_up</a></li>
            </ul> 
        </div>
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
                    <li><a href="reservation_par_commande.html">reservation une commande</a></li>
                    <li><a href="revervation_par_table.html">reservation une table</a></li>
                    </ul>
            </div>
    
        </div>
        
    </div>

    <div class="article">
        <ul>
            <li>
                <PRE>                       <H1 style="margin:0px 50% ;">def</H1>         
                top menu est les top meilleur restaurent en tunis 
                cette restaurent est ouvrire 24h/24h il trouve en 3 lieu 
                tunis,sousse et sfax il y a 2 type de reservation :
                - la reservation par table il oblige reserve appres 24h .
                - la reservation par commade avec livrsion ou sans livresion.
                </PRE>
            </li>
            <li>
                <div>
                    <img src="098c008f-eff2-4d12-aa75-aa56512360ae.jpg" alt="">
                </div>
            </li>
        </ul>
    </div>
    <div class="title">nombre</div>
    <div class="nombre">
        <div style="margin-left:13% ;">
            <img src="images3.jpg" alt="">
            <p>39</p>
        </div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div>
            <img src="chaise.png" alt="">
            <p>196</p>
        </div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div>
            <img src="images9.png" alt="">
            <p>35</p>
        </div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div class="tache" style="margin-top: 8.5%;"></div>
        <div>
            <img src="simple-black-and-white-piece-of-cake-vector-8613700.jpg" alt="">
            <p>51</p>
        </div>
    </div>
    <div class="menu"><img src="1000_F_236853680_VuMYkwtFIUeaerTsIy46meV6CaAmtlzE.jpg" alt=""></div>
    <div class="title">les lieu</div>
    <div class="article3">
        <div class="leiu" style="margin-left:18% ;">
            <img src="images (1).jpg" alt="" style="height: 50%; width: 100%;">
            <div>Cette restaurent contient a la tunis avune ben khaldoun face wikiki</div>
            <a href="kk">maps</a>
        </div>
        <div class="leiu">
            <img src="images (2).jpg" alt="" style="height: 50%; width: 100%;">
            <div>Cette restaurent contient a la sousse avune yeser arafet face elu</div>
            <a href="jj">maps</a>
        </div>
        <div class="leiu">
            <img src="images.jpg" alt="" style="height: 50%; width: 100%;">
            <div>Cette restaurent contient a la sfax avune france face banc biat</div>
            <a href="jj">maps</a>
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

<?php
}else{
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Top Menu</title>
        <link rel="stylesheet" href="style_restaurent.css">
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
                    <li style="margin-top:15px ;"><a href="login.php" class="login">Login</a></li>
                    <li style="margin-top:15px ;"><a href="sign_up0.php" class="sign">Sign_up</a></li>
                </ul> 
            </div>
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
                        <li><p href="reservation_par_commande.html">reservation une commande</p></li>
                        <li><p href="revervation_par_table.html">reservation une table</p></li>
                        </ul>
                </div>
        
            </div>
            
        </div>
    
        <div class="article">
            <ul>
                <li>
                    <PRE>                       <H1 style="margin:0px 50% ;">def</H1>         
                    top menu est les top meilleur restaurent en tunis 
                    cette restaurent est ouvrire 24h/24h il trouve en 3 lieu 
                    tunis,sousse et sfax il y a 2 type de reservation :
                    - la reservation par table il oblige reserve appres 24h .
                    - la reservation par commade avec livrsion ou sans livresion.
                    </PRE>
                </li>
                <li>
                    <div>
                        <img src="098c008f-eff2-4d12-aa75-aa56512360ae.jpg" alt="">
                    </div>
                </li>
            </ul>
        </div>
        <div class="title">nombre</div>
        <div class="nombre">
            <div style="margin-left:13% ;">
                <img src="images3.jpg" alt="">
                <p>39</p>
            </div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div>
                <img src="téléchargement.png" alt="">
                <p>196</p>
            </div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div>
                <img src="images9.png" alt="">
                <p>35</p>
            </div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div class="tache" style="margin-top: 8.5%;"></div>
            <div>
                <img src="simple-black-and-white-piece-of-cake-vector-8613700.jpg" alt="">
                <p>51</p>
            </div>
        </div>
        <div class="menu"><img src="1000_F_236853680_VuMYkwtFIUeaerTsIy46meV6CaAmtlzE.jpg" alt=""></div>
        <div class="title">les lieu</div>
        <div class="article3">
            <div class="leiu" style="margin-left:18% ;">
                <img src="rest.jpg" alt="" style="height: 50%; width: 100%;">
                <div>Cette restaurent contient a la tunis avune ben khaldoun face wikiki</div>
                <a href="kk">maps</a>
            </div>
            <div class="leiu">
                <img src="images (2).jpg" alt="" style="height: 50%; width: 100%;">
                <div>Cette restaurent contient a la sousse avune yeser arafet face elu</div>
                <a href="jj">maps</a>
            </div>
            <div class="leiu">
                <img src="images.jpg" alt="" style="height: 50%; width: 100%;">
                <div>Cette restaurent contient a la sfax avune france face banc biat</div>
                <a href="jj">maps</a>
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

<?php
}
?>
</body>
</html>