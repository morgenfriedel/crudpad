<?php $title = 'CRUDpad - Read'; ?>

<?php ob_start() ?>
    <h1>CRUDpad</h1>
    <ul>
        <?php foreach ($posts as $post): ?>
        <li>
            <a href="/read?id=<?= $post['id'] ?>"><?= $post['title'] ?></a> | <a href="/update?id=<?= $post['id'] ?>">Update</a>
        </li>
        <?php endforeach ?>
    </ul>
    <a href="/create">Create New Post</a> | <a href="/delete">Delete Posts</a>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>