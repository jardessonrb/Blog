<?php 
namespace Source\Models;

use Source\models\classConnection;

class classContact
{
	private $name, $email, $message;
	public function __construct(){

	}

	public function createContact($data)
	{
		$name_contact    = utf8_encode($data['contact_name']);
		$email_contact   = utf8_encode($data['contact_email']);
		$message_contact = utf8_encode($data['contact_message']);
		$id_contact      = uniqid();

		$conn = (new classConnection())->getConnect();

		$stmt = $conn->prepare("INSERT INTO table_contact(id_contact, name_contact, email_contact, message_contact) VALUES (?,?,?,?)");

		$stmt->bind_param('ssss', $id_contact, $name_contact, $email_contact, $message_contact);


		if($stmt->execute()){
            
            $close = ($conn->close());
            echo json_encode(1);
			return;

		}else{

			echo json_encode(0);

			return;
		}

	}



}




 ?>