<?php
session_start();
require_once("../model/UserModel.php"); // Asegúrate de que este archivo exista y tenga el método getUserByEmailAndPassword

$userModel = new UserModel();

require_once("../view/loginView.php");



if (isset($_POST['login-btn'])) {

  $email = $_POST['email-login']; // Asegúrate de que estos valores existan
  $password = $_POST['pass-login'];
  $role = $userModel->getUserRole($email, $password);
if ($role) {
    $_SESSION['role'] = 1;
    header('Location: ../index.php');
} else {
    echo "<script type='text/javascript'>alert('Los datos son incorrectos');</script>";
    return false;
}


}



?>