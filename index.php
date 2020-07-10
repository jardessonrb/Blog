<?php

require __DIR__ . "/vendor/autoload.php";

$route = new \CoffeeCode\Router\Router(ROOT);

$route->namespace("Source\Controllers");


/* Exemplo na passagem de parâmetro por rota...

$route->get("/contact/{data}", function ($data) {
    echo "<h1>GET :: Spoofing</h1>", "<pre>", print_r($data, true), "</pre>";
});
*/

/*Navegação da paginas do blog*/
$route->get("/", "Web:home");
$route->get("/register-post", "Web:registerPost");
$route->get("/about", "Web:about");
$route->get("/contact", "Web:contactUs");
$route->get("/viewTeste", "Web:viewTeste");
$route->get("/view-post/{id_post}", "Web:viewPost");

/*Navegação com parâmetros dinâmicos*/
$route->get("/category/{category}", "Web:homeCategory");
$route->get("/category/{category}/{page}", "Web:homeCategory");



/*Rotas referentes aos metodos*/
/*TESTECONTROLLER*/
$route->post("/createContact1", "TesteController:createContact", "testeController.create");

/*METODOS DA CLASSE POST*/

$route->post("/createPost", "PostController:createPost", "postController.createPost");

/*METODOS DA CLASS CONTACT*/

$route->post("/createContact", "ContactController:createContact", "contactController.create");




/*Direcionamento para a página de erro, quando a rota não existir*/
$route->group("ops");
$route->get("/{errcode}", "Web:error");

$route->dispatch();

if ($route->error()) {
	$route->redirect("/ops/{$route->error()}");
}