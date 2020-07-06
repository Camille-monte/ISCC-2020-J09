<!DOCTYPE html>
<html>
<head>
<title>mini-site-routing</title>
<meta charset="utf-8">
 <head>
 </head>
    <body>
    <nav>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1">Accueil!</a>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=2">Page 2</a>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=3">Page 3</a>
    <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion">Connexion</a>
    <?php
  
  if($_COOKIE['id']){
    echo '<a href="http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=admin">Admin</a>';
  }
  ?>
    </nav>
 
<?php
if($_GET['page'] == '1')
{
    echo '<h1>Accueil !</h1>';
}
if($_GET["page"] == "2")
{
    echo '<h1>Page 2 </h1>';
}
if($_GET["page"] == "3")
{
    echo '<h1>Page 3 </h1>';
}
if($_GET['page'] == 'connexion')
{
echo '<h1>Connexion</h1>';
include('connexion.php');
}

?>
</body>

    <footer>
    <?php
     session_start();
    if(isset($_SESSION["id"])) {
      session_start();
    echo '<p> Login : ' .$_SESSION["id"]. '</p>';
}

elseif(!isset($_COOKIE['id'])){
  session_start();
    $_SESSION['id'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST['password'];
}
else{
    header('http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion');
}

?>

    </footer>
    </html>