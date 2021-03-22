<?php

require_once 'required/db.php';

if(isset($_POST['recording'])){

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$phone = intval($phone);

$name = htmlspecialchars(mysqli_escape_string($db, $name));
$email = htmlspecialchars(mysqli_escape_string($db, $email));
$phone = htmlspecialchars($phone);

$sql = mysqli_query($db, "INSERT INTO `recording` (`name`, `email`, `phone`)
                    VALUES ('$name', '$email', '$phone') ");

    if($sql) {
        $_SESSION['message'] = 'Спасибо за запись, с вами скоро свяжутся';
        header('Location: /');
    }else{
        $_SESSION['message'] = 'Запись прошла неудачно, попробуйте ещё';
        header('Location: /');
    }

}else if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $phone = intval($phone);

    $name = htmlspecialchars(mysqli_escape_string($db, $name));
    $email = htmlspecialchars(mysqli_escape_string($db, $email));
    $phone = htmlspecialchars($phone);

    $sql = mysqli_query($db, "INSERT INTO `recording` (`name`, `email`, `phone`, `course_id`)
                    VALUES ('$name', '$email', '$phone', '$id') ");

    if($sql) {
        $_SESSION['message'] = 'Спасибо за запись, с вами скоро свяжутся';
        header('Location: /');
    }else{
        $_SESSION['message'] = 'Запись прошла неудачно, попробуйте ещё';
        header('Location: /');
    }
}
