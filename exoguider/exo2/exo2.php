
<?php $cejour=getdate();?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
</head>
<body>
<h2>en ce <?php echo $cejour["mday"]." ". $cejour["month"]." ". $cejour["year"]." "; ?>, sur le serveur <?php echo $_SERVER["SERVER_NAME"];?>, il est <?php echo $cejour["hours"]."h ". $cejour["minutes"]."mn";?>.<br/></h2>
<h3>variableHTTP server ($_SERVER)</h3>
<table border="1">
<?php foreach ($_SERVER as $item=>$valeur ){?>
<tr>
    <td><?php echo $item ; ?></td>
    <td><?php echo $valeur ; ?> &nbsp;</td>
</tr>
<?php } ?>
    <!-- <tr>
        <td><b>variable</b></td>
        <td><b>valeur</b></td>
    </tr>
    <tr>
        <td><?php echo "GATEWAY_INTERFACE"; ?></td>
        <td><?php echo getenv("GATEWAY_INTERFACE"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_NAME" ; ?></td>
        <td><?php echo getenv("SERVER_NAME"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_SOFTWARE"; ?></td>
        <td><?php echo getenv("SERVER_SOFTWARE"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_PROTOCOL" ; ?></td>
        <td><?php echo getenv("SERVER_PROTOCOL"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "REQUEST_METHOD"; ?></td>
        <td><?php echo getenv("REQUEST_METHOD"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "QUERY_STRING" ; ?></td>
        <td><?php echo getenv("QUERY_STRING"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "DOCUMENT_ROOT"; ?></td>
        <td><?php echo getenv("DOCUMENT_ROOT"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT" ; ?></td>
        <td><?php echo getenv("HTTP_ACCEPT"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_CHARSET"; ?></td>
        <td><?php echo getenv("HTTP_ACCEPT_CHARSET"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_ENODING" ; ?></td>
        <td><?php echo getenv("HTTP_ACCEPT_ENCODING"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_LANGUAGE"; ?></td>
        <td><?php echo getenv("HTTP_ACCEPT_LANGUAGE"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_CONNECTION" ; ?></td>
        <td><?php echo getenv("HTTP_CONNECTION"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_HOST"; ?></td>
        <td><?php echo getenv("HTTP_HOST"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_REFERER" ; ?></td>
        <td><?php echo getenv("HTTP_REFERER"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_USER_AGENT"; ?></td>
        <td><?php echo getenv("HTTP_USER_AGENT"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "REMOTE_ADDR" ; ?></td>
        <td><?php echo getenv("REMOTE_ADDR"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SCRIPT_FILEMANE"; ?></td>
        <td><?php echo getenv("SCRIPT_FILEMANE"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_ADMIN" ; ?></td>
        <td><?php echo getenv("SERVER_ADMIN"); ?> &nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_PORT"; ?></td>
        <td><?php echo getenv("SERVER_PORT"); ?>&nbsp;</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_SIGNATURE" ; ?></td>
        <td><?php echo getenv("SERVER_SIGNATURE"); ?> &nbsp</td>
    </tr> -->


    </table>    


</body>
</html>