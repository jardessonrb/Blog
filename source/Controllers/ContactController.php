<?php
namespace Source\Controllers;

use League\Plates\Engine;
use Source\models\classContact;


class ContactController
{
    private $view;

	public function __construct($router)
	{
		$this->view = Engine::create(__DIR__ ."/../pages/views", "php");
		$this->view->addData(["router" => $router]);

    }


    public function createContact(array $data)
    {

    	$contact  = new classContact();

    	return $contact->createContact($data);

    }

}