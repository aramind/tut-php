<?php

require 'functions.php';

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "tut-php/yt-laracasts/") {
    require 'controllers/index.php';
}
