<?php

require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

ob_start();

$route = new Router("http://localhost/FillTime", ":");

$route->namespace("source\Web");
// Rotas amigáveis da área pública
$route->get("/", "Site:home");
$route->get("/sobre", "Site:about");
$route->get("/contato", "Site:contact");
$route->get("/faqs","Site:faqs");
$route->get("/login","Site:login");
$route->get("/cadastro","Site:register");
//$route->get("/localizacao", "Site:location");
//$route->get("/carrinho-compras","Site:cart");
//$route->get("/servicos","Site:services");
//$route->get("/perfil","Site:profile");

// Rotas amigáveis da área restrita
$route->group("/app");
$route->get("/", "App:home");
$route->group(null);

$route->group("/admin");
$route->get("/", "Admin:home");
$route->group(null);

$route->get("/ops/{errcode}", "Site:error");

$route->group(null);

$route->dispatch();

if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();