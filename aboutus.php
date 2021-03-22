<?php include_once 'required/header.php'; ?>

<div class="main">

    
    <div class="container-fluid about_us_bg">
        <div class="row">
            <div class="col-12">
            <h1>ШКОЛА НЕМЕЦКОГО ЯЗЫКА <span style="color: red">GERMAN</span></h1>
            </div>
        </div>
    </div>
    
    <div class="container text_aboutUs">
        <div class="row">
        <?php foreach($getAboutUs as $item): ?>
            <div class="col-6">
                <h3><?=$item['title']?></h3>
                <p><?=$item['description']?></p>
                <p><?=$item['text']?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
        

    <div class="container-fluid team_bg">
        <div class="row">
            <h2>НАША КОМАНДА</h2>
            <?php foreach($getAllTeams as $item): ?>
            <div class="col-4">
                <img src="images/<?=$item['image']?>" alt="" width="360" height="360">
                <p><?=$item['fio']?>, <?=$item['profession']?></p><hr>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include_once 'required/footer.php'; ?>