<?php include_once 'required/header.php'; ?>

	<div class="main">
		<div class="container-fluid bg-image-header">
        <div class="row header-text">
        <div class="col-6">
        </div>
          <div class="col-6">
            <h1 style="margin-top: 80px">Школа немецкого языка</h1>
            <p style="margin-top: 80px">Школа немецкого языка приглашает всех желающих на 7-дневные курсы. Пройдя наш курс, вы сможете свободно владеть базовым норвежским для поездок в Норвегию и для постоянного места жительства. Запишитесь прямо сейчас</p>
            <a href="courses.php" class="btn btn-success" type="submit" style="margin-top: 80px">НАШИ КУРСЫ</a>
          </div>
        </div>
    </div>

    

    <div class="container">
      <div class="row text-form-index">
      <h2 style="margin-bottom: 50px">Форма обучения</h2><br>

      <?php foreach ($getAllCourses as $item): ?>
        <div class="col-4">
        <img src="images/<?=$item['image']?>" alt="">
            <h4><?=$item['little_title']?></h4>
            <p><?=$item['little_desc']?></p>
            <p style="color: red"><?=$item['price']?> руб</p>
            <a href="courses.php" class="btn btn-success">Подробнее</a>
        </div>
      <?php endforeach; ?>

      </div>
    </div>
    <div class="container">
      <div class="row">
      <h2 style="text-align: center; margin: 50px 0px">ЗАПИСАТЬСЯ НА КУРСЫ</h2>
        <div class="col-6">
          <h3>Запишитесь на курсы немецкого языка</h3>
          <form action="verification.php" method="POST">
          <label for="name"></label>
          <input type="text" name="name" id="name" class="form-control" placeholder="Имя"><br>  

          <label for="email"></label>
          <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"><br>

          <label for="phone"></label>
          <input type="tel" name="phone" id="phone" class="form-control" placeholder="Телефон"><br>

          <input type="submit" name="recording" class=" form-control btn btn-success" value="ОТПРАВИТЬ"><br>
          </form>
        </div>
        <div class="col-6">
          <p><a href="#">+7(233)-45-67-80</a></p><br>
          <p>Россия, г. Москва, ул. Карла Маркса, дом 1</p><br>
          <p><a href="#">german.com</a></p><br>
          <p><a href="#">support@mail.com</a></p><br>
        </div>
      </div>
    </div>
	</div>

<?php include_once 'required/footer.php'; ?>