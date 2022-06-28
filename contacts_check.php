<?php
session_start();
function ppp(){
    header("Location: index.php");
    exit;
}

unset($_SESSION['errorName']);
unset($_SESSION['errorEmail']);
unset($_SESSION['errorPhone']);
unset($_SESSION['errorMassage']);

$username = htmlspecialchars(trim($_POST['username']));
$email = htmlspecialchars(trim($_POST['useremail']));
$phone = htmlspecialchars(trim($_POST['phone']));
$massage = htmlspecialchars(trim($_POST['massage']));


$_SESSION['username'] = $username;
$_SESSION['useremail'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['massage'] = $massage;




if(($username) == "" || strlen($username) <= 2){
    $_SESSION['errorName'] = "Введите правильное имя";
    ppp();
    
} else if($email == ""){
    $_SESSION['errorEmail'] = "Введите правильное email";
    ppp();
    
} else if (strlen($phone) < 8){
    $_SESSION['errorPhone'] = "Введите номер";
    ppp();
    
} else if(strlen($massage) <= 10){
    $_SESSION['errorMassage'] = "Не менее 10 символов";
    ppp();
    
} else{
    $_SESSION['good'] = "Успешно";
    ppp();
    }