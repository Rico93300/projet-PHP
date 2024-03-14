<?php
$title= "create article";
require_once(__DIR__ . "/partials/head.php") ?>

<h1>  create article</h1>
 <form action="/article-create" method="post">
    <div>
        <label for="title ">title</label>
        <input type="text" name ='title'>
    </div>
    <div>
        <label for="text ">text</label>
        <textarea name="text" id = "" cols ="30" row ="10" ></textarea>
    </div>
    <div>
        <label for="date ">date</label>
        <input type="date" name ='date'>
    </div>
 
<button type="submit"> create</button>
</form>

<?php require_once(__DIR__ . "/partials/footer.php");
if (isset($error)) {
    echo "<p class='text-danger'>" . $error . "</p>";
} ?>
