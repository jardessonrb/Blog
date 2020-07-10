<?php
namespace Source\Models;

use Source\Models\classConnection;

Class classTeste{
    

    private $conn, $id_blog, $titulo, $foto, $email; 


    public function __construct(string $id_blog = "", string $titulo = "", string $foto = "", string $email = "")
    {
        
        $this->id_blog = $id_blog;
        $this->titulo  = $titulo;
        $this->foto    = $foto;
        $this->email   = $email;
        $this->conn = (new classConnection())->getConnect();


    }

    public function create()
    {
        $bytes = random_bytes(5);
        $crypto_id = bin2hex($bytes);

		$stmt = $this->conn->prepare("INSERT INTO teste() VALUES (?,?,?,?)");

		$stmt->bind_param('ssss', $crypto_id, $this->titulo, $this->email, $this->foto);


		if($stmt->execute()){
            
            $close = ($this->conn->close());
            echo json_encode(1);
            
			return;

		}else{

			echo json_encode(0);

			return;
		}
    }

}