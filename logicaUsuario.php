<?php
session_start();


function logaUsuario($email) {
 return $_SESSION["usuario_logado"] = $email;
}


function usuarioLogado(){
 return $_SESSION["usuario_logado"];
}


function usuarioEstaLogado() {
 return isset($_SESSION["usuario_logado"]);
}
