<?php 
namespace Source\Controllers;

use League\Plates\Engine;
use Source\models\classPost;
use Source\models\classSystem;


class PostController
{
    private $view;

	public function __construct($router)
	{
		$this->view = Engine::create(__DIR__ ."/../pages/views", "php");
		$this->view->addData(["router" => $router]);

    }


    public function createPost(array $data)
    {

        $dir = SITE_ROOT.'/Images/';

        if(isset($_FILES)){

            $foto     = $_FILES['photo_post']; 
            $novoNome = classSystem::renameImage($foto);  
            $caminho  = classSystem::createDirectory().'/'.$novoNome;
            $month    = date("F");

            if (move_uploaded_file($foto['tmp_name'], $caminho)) {
                $obj = new classPost();

                $response = $obj->createPost($data, $novoNome, $month);

                return json_encode($response);
            }

        }else{
            $response = 0;
            return json_encode($response);

        }
    }

}