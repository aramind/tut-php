<?php

$router->get("/tut-php/yt-laracasts/", 'controllers/index.php');
$router->get("/tut-php/yt-laracasts/about", 'controllers/about.php');
$router->get("/tut-php/yt-laracasts/contact", 'controllers/contact.php');

// notes
$router->get("/tut-php/yt-laracasts/notes", 'controllers/notes/index.php');
$router->get("/tut-php/yt-laracasts/note", 'controllers/notes/show.php');
$router->delete("/tut-php/yt-laracasts/note", 'controllers/notes/destroy.php');

$router->get("/tut-php/yt-laracasts/note/edit", 'controllers/notes/edit.php');
$router->patch("/tut-php/yt-laracasts/note", 'controllers/notes/update.php');

$router->get("/tut-php/yt-laracasts/notes/create", 'controllers/notes/create.php');
$router->post("/tut-php/yt-laracasts/notes", 'controllers/notes/store.php');


$router->get('/tut-php/yt-laracasts/register', 'controllers/registration/create.php');
