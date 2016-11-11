<?php
/**
 * Created by PhpStorm.
 * User: Konstantin
 * Date: 2016-11-01
 * Time: 13:26
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>login</title>
    <link href="css/signing.css" rel="stylesheet">
</head>
<body>
    <a href="{{ url('/') }}">
        <img class="navigate-back" src="images/ic_arrow_back_white_24dp_2x.png">
    </a>
    <div class="container">
        <h2><span>LOG IN TO </span>HERMES</h2>
        <form id="loginForm" action="../components/requestHandling.php" method="post">
            <label for="email"></label>
            <input id="email" type="text" name="email" placeholder="email">
            <p class="error email"></p>
            <label for="password"></label>
            <input id="password" type="password" name="password" placeholder="password">
            <p class="error password"></p>
            <input type="submit" value="LOG IN">
            <p class="error system"></p>

            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="login">
        </form>
    </div>

    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/jquery.form.min.js"></script>
    <script src="js/signing.js"></script>
</body>
</html>


