<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
    if(!(isset($_SESSION["usrnom"])))
    {
        echo "erreur login!";
    }
    else {
        echo"au menu";
    };
    ?>
    </title>
</head>
<body>
    <?php 
    if(!(isset($_SESSION["usrnom"])))
    {
        ?>
        <h1>erreur login: vous n'avez pas droit d'acces a ce site</h1>
        <p><a href="login.html"> retour a la page d'acceuil</a></p>
        
        <?php
    }
    else
    {
        ?>
        <h1>au menu du jour pour vous, <?php echo $_SESSION["usrnom"]; ?> ...</h1>
        <ul>
            <li><a href="../">sommaire</a></li>
            <li>et aussi</li>
            <li>et encore</li>
            <li>et pour finir</li>
        </ul>
        <?php
    }
   ?>
</body>
</html>