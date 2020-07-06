
<?php 

if($_POST['password']==2020) {   
    session_start();
    $_SESSION['id'] = $_POST['login'];
    $_SESSION['mdp'] = $_POST ['password'];
        header ("Location: http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=1");
        
    setcookie("id", $_SESSION['id'],time()+3600);
}
else{
    echo '<p> Mauvais couple identifiant / mot de passe </p>';
    echo "<p> Cliquez <a href='http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX_01/mini-site-routing.php?page=connexion'>ici </a> pour retourner sur l'espace de connexion.</p>";

}
?>

