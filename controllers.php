<?php

function index_action()
{
    $posts = get_all_posts();
    require 'views/index.php';
}

function create_action()
{
    require 'views/create.php';
}

function read_action($id)
{
    $post = get_post_by_id($id);
    require 'views/read.php';
}

function update_action($id)
{
    $post = get_post_by_id($id);
    require 'views/update.php';
}

function delete_action()
{
    $posts = get_all_posts();
    require 'views/delete.php';
}


?>