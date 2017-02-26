<?php
// https://developers.google.com/identity/sign-in/web/backend-auth

require_once './vendor/autoload.php';

$client = new Google_Client();
$payload = $client->verifyIdToken($_GET['id_token']);
var_dump($payload);

if ($payload) {
    
    // Registramos el sub (user id) y el email en BD 
    // o hacemos matching por sub o email con un usuario de nuestra BD
    // UsuarioDAO::register($payload) / UsuarioDAO::findByGoogleID($payload['sub']) or UsuarioDAO::findByEmail($payload['email'])

    // Regstramos en la sesión
    session_start();
    $_SESSION['user'] = $payload;

    include './profile.php';
    
} else {
    die('Invalid ID token');
}