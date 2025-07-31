<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_reservationTable.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="nav_bar">
            <ul>
                <li><img class="logo" src="logo.jpg" alt=""></li>
                <li class="name"><p>Top Menu</p></li>
                <li class="media"><a  href=""><img src="fecbook.png" alt=""></a></li>
                <li class="media"><a  href=""><img src="insta.jpg" alt=""></a></li>
                <li class="media"><a  href=""><img src="what.png" alt=""></a></li>
                <li class="media"><p style="font-size: 18px;">+216 77 777 777</p></li>
                <li><p class="symbole">M</p></li>
            </ul>
        </div>
    </div>
    <div class="head">
        <p>Il obligtoire remplir cette tableau avec details et merci. </p>
       <p>si les nombre de perssone depasse a 10 perssone doit etre obligtroirement connect a telephone</p>
        <table>
            <caption class="reservation">tableau de reservation</caption>
            <tr>
                <th>nom et prenom</th>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <th>date</th>
                <td><input type="date" name="date" id=""></td>
            </tr>
            <tr>
                <th>l'heure</th>
                <td><input type="time" name="heure" id=""></td>
            </tr>
            <tr>
                <th>nombre de persone</th>
                <td><input type="number" name="num_persone" id="" max="10"></td>
            </tr>
            <tr>
                <th>numero de telephone</th>
                <td><input type="tel" name="num_telephone" id=""></td>
            </tr>
            <tr>
                <th>email</th>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <th>commantere</th>
                <td><input type="text" name="commantere" id=""></td>
            </tr>
            <tr>
                <td class="submit" colspan="3">
                    <input  type="submit" name="submit" value="valide">
                </td>
            </tr>
        </table>
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