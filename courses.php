<?php include_once 'required/header.php'; ?>

<div class="main">
    <?php foreach($getAllCourses as $item): ?>
    <div class="container-fluid" style="margin-bottom: 70px">
        <div class="row header-courses">
          <div class="col-12">
          
            <h2 style="margin-bottom: 30px"><?=$item['header_title']?></h2>
            <a href="recording.php?id=<?=$item['id']?>" name="header_btn" class="btn btn-success"><?=$item['header_button']?></a>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        
            <div class="col-6">
                <h5><?=$item['title']?></h5>
                <p><?=$item['description']?></p>
        
    <hr>

        <h6>Пройдя наш курс, вы научитесь:</h6>
      
                <p><?=$item['text_after_desc']?></p>
            
    <a href="recording.php?id=<?=$item['id']?>" name="btn" class="btn btn-success">ЗАПИСАТЬСЯ НА ИНТЕНСИВ</a>
            </div>
            <div class="col-6">
                <img src="images/<?=$item['human_image']?>" alt="" width="500px">
                <p><?=$item['fio']?></p>
                <p><?=$item['role']?></p>
                <p><?=$item['human_desc']?></p>
            </div>
            
        </div>
    </div>
    
    <?php endforeach; ?>
</div>
    

<?php include_once 'required/footer.php'; ?>