<?php
require_once 'required/header.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);

    ?>

    <div class="container text-center">
        <div class="row">
        <h1 style="margin-top: 70px;">Записаться на курс:</h1>
            <div class="col-12">
            <form style="margin-top: 70px" action="verification.php?id=<?=$id?>" method="post">
                <label for="name">Имя:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Имя"><br>

                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail"><br>

                <label for="phone">Телефон:</label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="+7 900 000 00 00"><br>

                <input type="submit" class="form-control btn btn-success" value="Отправить">
            </form>

            </div>
        </div>
    </div>
    <?php

}else{
    header('Location: /');
}

require_once 'required/footer.php';