<?php
error_reporting(0);
$name = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

if(trim($name) == "") {
    echo "Введите имя пользователя";
}
else if(strlen(trim($name)) <= 1 ){
    echo "Такого имени не существует";
}
else if(trim($email) == "" || trim($password) == "") {
    echo "Введите данные полностью";
}
else{
    // $_POST['password'] = md5($password);

    // echo "<h3>Все данные</h3>";
    // foreach ($_POST as $key => $value){
    //     echo "<p>$value</p>";
    // }   
    header('Location: about.php');
    exit;
    }

