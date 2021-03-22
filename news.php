<?php include_once 'required/header.php'; ?>

<div class="main">
    <div class="container news_images">
        <div class="row">
        <?php foreach($getAllNews as $item): ?>
            <div class="col-12">
                <h3><?=$item['title']?></h3>
                <img class="leftimg" src="images/<?=$item['image']?>" alt="" width="300" height="130">
                <p><?=$item['little_desc']?></p>
                <a style="margin-bottom: 200px; margin-left: 600px;" href="courses.php" class="btn btn-success">Записать на курсы</a>
            </div>
            <hr>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include_once 'required/footer.php'; ?>