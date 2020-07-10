<?php
namespace Source\Controllers;

use League\Plates\Engine;
use Source\models\classConnection;
use Source\models\classPost;


class Web
{

	private $view;

	public function __construct($router)
	{
		$this->view = Engine::create(__DIR__ ."/../pages/views", "php");
		$this->view->addData(["router" => $router]);

    }
    
    public function home(): void 
	{
		$post = (new classPost())->getLastPost();
		echo $this->view->render("home", [
			"title" => SITE. " | Home" , "primaryPost" => $post
		]);
	}

	public function about(): void 
	{
		echo $this->view->render("about", [
			"title" => SITE. " | About" 
		]);
	}

	public function contactUs(): void 
	{
		echo $this->view->render("contact-us", [
			"title" => SITE. " | Contact-Us"
		]);
	}

	public function registerPost(): void 
	{
		echo $this->view->render("register-post", [
			"title" => SITE. " | Register-Post" 
		]);
	}

	public function viewTeste(): void 
	{
		echo $this->view->render("viewTeste", [
			"title" => SITE. " | viewTeste" 
		]);
	}

	public function homeCategory($data): void 
	{
		$data_posts = (new classPost())->getPost($data);

		echo $this->view->render("home", [
			"title" => SITE. " | Category-Post", "data_posts" => $data_posts
		]);
	}

	public function viewPost($data): void 
	{
		$data_posts = (new classPost())->getPostId($data);

		echo $this->view->render("view-post", [
			"title" => SITE. " | View-Post", "data_posts" => $data_posts
		]);
	}
	

	
	public function error(array $data): void 
	{

		echo $this->view->render("error", [
			"title" => "Erro {$data["errcode"]} |" .SITE, "Error" => $data["errcode"]
		]);
	}

	
}