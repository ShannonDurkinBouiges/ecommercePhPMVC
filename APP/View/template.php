<!DOCTYPE html>
<!--
 * @author ShannonDurkinBouiges@gmail.com
 * Template - E-Commerce Shop MVC
 -->
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title>
            E-Commerce Shop Template MVC
        </title>
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/papeterie.css" rel="stylesheet" type="text/css"/>
        <script src="dist/js/jquery-3.4.1.js"></script>
        <script src="dist/js/bootstrap.js"></script>

    </head>
    <body>

        <?php
        include '_header.php';
        include '_nav.php';
        
        include $view.'.php';
        
        include '_footer.php';
        ?>
   </body>
</html>

