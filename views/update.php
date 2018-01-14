<?php $title = 'CRUDpad - Update'; ?>

<?php ob_start() ?>
	<h1>CRUDpad</h1>
    <form action="/update-post?id=<?= $_GET['id'] ?>" method="post" id="newsletter" name="newsletter">
        <input type="text" name="author" id="author" placeholder="Author" value="<?= $post['author'] ?>" ><br>
        <input type="text" name="title" id="title" placeholder="Title" value="<?= $post['title'] ?>" ><br>
        <textarea name="body" id="body" cols="30" rows="10"><?= $post['body'] ?></textarea><br>
        <input type="submit" value="Submit" name="submit-button" id="submit-button">
    </form>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>