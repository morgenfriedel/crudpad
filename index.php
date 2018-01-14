<?php

// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

// route the request internally
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $uri) {

    index_action();

} elseif ('/create' === $uri) {

    create_action();

} elseif ('/create-post' === $uri) {

    if (!empty($_POST)) {
    	
    	$author = $_POST['author'];
    	$title = $_POST['title'];
    	$body = $_POST['body'];

    	create_post($author,$title,$body);
    }

} elseif ('/read' === $uri && isset($_GET['id'])) {

    read_action($_GET['id']);

} elseif ('/update' === $uri && isset($_GET['id'])) {

    update_action($_GET['id']);

} elseif ('/update-post' === $uri && isset($_GET['id'])) {

	if (!empty($_POST)) {

		$author = $_POST['author'];
		$title = $_POST['title'];
		$body = $_POST['body'];
		$id = $_GET['id'];

		update_post($id,$author,$title,$body);
	}

} elseif ('/delete' === $uri) {

    delete_action();

} elseif ('/delete-posts') {

    if (!empty($_POST)) {

        $posts = $_POST;
        delete_posts($posts);
        
    }

} else {

    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>Page Not Found</h1></body></html>';

}

?>