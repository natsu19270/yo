

    <?php
    session_start();
    $_SESSION["usrnom"]=$_POST["nom"];
    header("location:loginsuite.php");
    ?>
    

