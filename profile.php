<?php
@session_start();
if(!isset($_SESSION['user'])){
    die('No conectado');
}

$user = $_SESSION['user'];
?>

<table border="1">
    <tr>
        <td rowspan="2"><img src="<?=$user['picture']?>"></td>
        <td><b><?=$user['name']?></b></td>
    </tr>
    <tr>
        <td><?=$user['email']?></td>
    </tr>
</table>

<p>
    <a href="https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://localhost/GoogleLogin/">Salir</a>
</p>