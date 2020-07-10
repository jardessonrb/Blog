<?php
namespace Source\Controllers;

use League\Plates\Engine;
use Source\models\classConnection;
use Source\models\classTeste;


class TesteController
{
    private $view;

	/*public function __construct($router)
	{
		$this->view = Engine::create(__DIR__ ."/../pages/views", "php");
		$this->view->addData(["router" => $router]);

    }*/

    public function createContact(array $data): string 
	{

		/*$titulo = filter_input(INPUT_POST, 'titulo');
		$email = filter_input(INPUT_POST, 'email');
	    $foto = $_FILES['foto'];	
	    $dir = '/Images/';
	    $names = explode('.', $foto['name']);
		$ex = end($names);
		$nm = SITE_ROOT.$dir.uniqid().'.'.$ex;
	    move_uploaded_file($foto['tmp_name'], $nm);
	    return json_encode(var_dump(SITE_ROOT));*/
	    $dir = SITE_ROOT.'/Images/';

	    if(isset($_FILES))
	    {
	    	$foto = $_FILES['foto'];	
		    $names = explode('.', $foto['name']);
			$ex = end($names);
			date_default_timezone_set('America/Sao_Paulo');
			$novoNome = md5(date("j-n-H-i")).'.'.$ex;
			$caminho = $dir.$novoNome;

			if (move_uploaded_file($foto['tmp_name'], $caminho)) {
				//var_dump($novoNome);
				$obj = new classTeste("", $data['titulo'], $novoNome, $data['email']);


				if($obj->create() == 1){
					return json_encode(1);
				}else{
					return json_encode(0);
				}
			}else{
				return json_encode(0);
			}

		var_dump($foto['name']);
	    }

	}

}