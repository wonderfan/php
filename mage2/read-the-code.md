The main code flow in the index.php:

1. require the bootstrap.php;
2. create the bootstrap object;
3. use the bootstrap object to create application object;
4. use the bootstrap to run the application;

The main roles of the Boostrap object:

1. create one object manager via factory pattern;
2. use the object manager to get the front controller;
3. use the front controller to do the dispatch work;
4. construct the response object and send it to browser.

