<?php

function open_database_connection()
{
    $db_host='localhost';
    $database = 'symf';
    $username = 'root';
    $password = '';

    $link = new PDO("mysql:host=".$db_host.";dbname=".$database, $username, $password);
    $link = new PDO("mysql:host=localhost;dbname=symf", 'root', '');

    return $link;
}

function close_database_connection(&$link)
{
    $link = null;
}

function get_all_posts()
{
    $link = open_database_connection();

    $result = $link->query('SELECT id, title FROM posts');

    $posts = array();
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $posts[] = $row;
    }
    close_database_connection($link);

    return $posts;
}

function get_post_by_id($id)
{
    $link = open_database_connection();

    $query = 'SELECT dt, author, title, body FROM posts WHERE  id=:id';
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    $row = $statement->fetch(PDO::FETCH_ASSOC);

    close_database_connection($link);

    return $row;
}

function create_post($title, $author, $body)
{
    $link = open_database_connection();

    $query="INSERT INTO posts (author,title,body) VALUES ('$author','$title','$body');";

    try {
        if($link->exec($query)) {
            $res = "Post Created.<br><br><a href='/'>Home</a>";
        }
        else {
            $res = "Creation Failed.<br><br><a href='/'>Home</a>";
        }
    }
    catch(PDOException $e) {}

    close_database_connection($link);
    echo $res;
}

function update_post($id, $title, $author, $body)
{
    $link = open_database_connection();

    $query="UPDATE posts SET author = '$author', title = '$title', body = '$body' WHERE id = :id;";
    $statement = $link->prepare($query);
    $statement->bindValue(':id', $id, PDO::PARAM_INT);

    try {
        if($statement->execute()) {
            $res = "Post Updated.<br><br><a href='/'>Home</a>";
        }
        else {
            $res = "Update Failed.<br><br><a href='/'>Home</a>";
        }
    }
    catch(PDOException $e) {}

    close_database_connection($link);
    echo $res;
}

function delete_posts($posts)
{
    $link = open_database_connection();
    $query = '';

    foreach ($posts as $k => $v) {
        if (strpos($k, 'post') !== false) {
            $query.="DELETE FROM posts WHERE id = '".$v."';";
            echo 'Deleting post ' . $v . '...<br>';
        }
    }

    try {
        if($link->exec($query)) {
            $res = "Posts Deleted.<br><br><a href='/'>Home</a>";
        }
        else {
            $res = "Deletion Failed.<br><br><a href='/'>Home</a>";
        }
    }
    catch(PDOException $e) {}

    close_database_connection($link);
    echo $res;
}

?>