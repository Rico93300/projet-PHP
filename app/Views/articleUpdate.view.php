<?php
$title= "article update";
require_once(__DIR__ . "/partials/head.php") ?>


<form action="" method="POST">
    <div>
        <label for="title ">title</label>
        <input type="text" name ='title' value="<?php echo $article['title']?>">
    </div>
    <div>
        <label for="article ">article</label>
        <textarea name="text" id = "" cols ="30" row ="10" ><?php echo $article['text']?></textarea>
    </div>
    <div>
        <label for="date ">date</label>
        <input type="date" name ='date' value="<?php echo $article['date']?>">
    </div>
 
<button type="submit">update</button>
</form>

<?php require_once(__DIR__ . "/partials/footer.php") ?>
