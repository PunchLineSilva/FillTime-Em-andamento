<?php

ob_start();

require  __DIR__ . "/../vendor/autoload.php";

// os headers abaixo são necessários para permitir o acesso a API por clientes externos ao domínio
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header('Access-Control-Allow-Credentials: true'); // Permitir credenciais

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

use CoffeeCode\Router\Router;

$route = new Router("http://localhost/FillTime/api",":");

$route->namespace("Source\WebService");

/* USERS */

$route->group("/users");

$route->get("/", "Users:listUsers");
$route->get("/id/{id}", "Users:listUserById");
$route->get("/id/", "Users:listUserById");

$route->post("/create", "Users:createUser");
$route->put("/update", "Users:updateUser");
$route->delete("/delete/id/{id}", "Users:deleteUsers");

$route->group("null");

$route->group("/app");

$route->group("null");

$route->group("/adm");

$route->group("null");

$route->group("/courts");
$route->get("/", "Courts:listCourts");
$route->get("/id/{id}", "Courts:listCourtById");
$route->post("/create", "Courts:createCourt");
$route->put("/update/{id}", "Courts:updateCourt");
$route->delete("/delete/{id}", "Courts:deleteCourt");

$route->group("null");

$route->group("/hours");
$route->get("/", "Hours:listHours");
$route->get("/id/{id}", "Hours:listHoursById");
$route->post("/create", "Hours:createHour");
$route->put("/update/{id}", "Hours:updateHour");
$route->delete("/delete/id/{id}", "Hours:deleteHour");

$route->group("null");

$route->dispatch();

/** ERROR REDIRECT */
if ($route->error()) {
    header('Content-Type: application/json; charset=UTF-8');
    http_response_code(404);

    echo json_encode([
        "code" => 404,
        "status" => "not_found",
        "message" => "URL não encontrada"
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

}

ob_end_flush();