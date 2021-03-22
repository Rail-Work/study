<?php 
session_start();
require_once 'db.php'; 
require_once 'functions.php';

$getAllCourses = getAllCourses();
$getAllTeams = getAllTeams();
$getAllContacts = getAllContacts();
$getAboutUs = getAboutUs();
$getAllNews = getAllNews();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
	<title>Главная</title>
</head>
<body>

<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <p class="text-muted">german.com</p>
          <p class="text-muted">+7(233)-45-67-80</p>
          <p class="text-muted">Россия, г. Москва, ул. Карла Маркса, дом 1</p>
          <p class="text-muted">support@mail.com</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Меню</h4>
          <ul class="list-unstyled">
            <li><a href="/" class="text-white">Главная</a></li>
            <li><a href="../aboutus.php" class="text-white">О нас</a></li>
            <li><a href="../courses.php" class="text-white">Курсы</a></li>
            <li><a href="../news.php" class="text-white">Новости</a></li>
            <li><a href="../contacts.php" class="text-white">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="/" class="navbar-brand d-flex align-items-center">
        <strong>German</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>