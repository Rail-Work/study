<?php include_once 'required/header.php'; ?>

<div class="main">
    <div class="container-fluid contact_text">
        <div class="row">
            <?php foreach ($getAllContacts as $item): ?>
            <div class="col-12">
                <h1 style="padding-bottom: 30px"><?=$item['header_title']?></h1> <hr>
                <h4><?=$item['title']?></h4>
            <h4 style="margin-top: 100px"><?=$item['phone']?></h4>
            <p><?=$item['text']?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php include_once 'required/footer.php'; ?>