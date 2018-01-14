<?php $title = 'CRUDpad - Create'; ?>

<?php ob_start() ?>
    <h1>CRUDpad</h1>
    <form action="/create-post" method="post" id="create-post" name="create-post">
        <input type="text" name="author" id="author" value="" placeholder="Author" /><br>
        <input type="text" name="title" id="title" value="" placeholder="Title" /><br>
        <textarea name="body" id="body" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Submit" name="submit-button" id="submit-button">
    </form>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>