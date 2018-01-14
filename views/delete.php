<?php $title = 'CRUDpad - Delete'; ?>

<?php ob_start() ?>
    <h1>CRUDpad</h1>
    <form action="/delete-posts" method="post" id="delete-form" name="delete-form">
        <?php foreach ($posts as $post): ?>
        <div>
            <input type="checkbox" id="post-<?= $post['id'] ?>" name="post-<?= $post['id'] ?>" value="<?= $post['id'] ?>">
            <label for="post-<?= $post['id'] ?>"><?= $post['title'] ?></label>
        </div>
        <?php endforeach ?>
        <input type="submit" value="Delete" name="delete-button" id="delete-button">
    </form>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>