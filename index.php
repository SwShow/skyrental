<?php
require_once("helpers.php");
require_once("functions.php");
require_once('data.php');

if ((isset($categories)) && (isset($goods))) {
$page_content = include_template("./templates/main.php", [
    "categories" => $categories,
    "goods" => $goods
]);
$layout_content = include_template("./templates/layout.php", [
    "content" => $page_content,
    "categories" => $categories,
    "title" => "Главная"
]);

print($layout_content);
}