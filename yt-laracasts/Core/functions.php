<?php

function dd($value)
{
    echo '<pre style="background:#111;color:#0f0;padding:10px;border-radius:5px;">';
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    return require base_path('views/' . $path);
}
