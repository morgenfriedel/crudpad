CRUDpad
==================

A minimalist demonstration of CRUD operations with PHP and MySQL. It primarily uses the PDO class for connecting to the database to perform these operations.

This repository may serve as a good starting place for certain projects/prototypes, but does not feature any security checks, data sanitization, etc. Use at your own risk.

How to use
-----------------

* Run the [posts.sql](posts.sql) file to create the structure of the database.
* Open the [model.php](model.php) file and complete the variables with data from your database.
* Enjoy.

cURL
-----------------

You can also use this to experiment with curl:

    curl --data "post-id=22" http://LOCALHOSTURL/delete-post
    curl --data "author=This%20is%20a%20Test&title=This%20is%20a%20Test&body=This%20is%20a%20Test" http://LOCALHOSTURL/create-post
    curl -i -H "Accept: application/json" -H "Content-Type: application/json" -X GET http://LOCALHOSTURL
