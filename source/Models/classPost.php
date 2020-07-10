<?php 

namespace Source\models;

use Source\Models\classConnection;
use Source\Models\classSystem;


class classPost
{


	public function createPost(array $data, string $novoNome, string $month)
	{


		$conn    = (new classConnection())->getConnect();
		$id_post = classSystem::createIdPost();
		date_default_timezone_set('America/Sao_Paulo');
		$dateCreate = date("Y-m-d H:m:s");
		$response = 0;

		$stmt = $conn->prepare("INSERT INTO table_post(id_post, title_post, id_category, content_post, dateCreate_post) VALUES (?,?,?,?,?)");

		$stmt->bind_param('sssss', $id_post, $data['title_post'], $data['id_category'],
		                    $data['content_post'],
			                $dateCreate);

		if($stmt->execute()){

			$stmt = $conn->prepare("INSERT INTO table_image(name_image, id_post, month_image) VALUES (?, ?, ?)");
			$stmt->bind_param('sss', $novoNome, $id_post, $month);

			if($stmt->execute()){
	 	        $response = 2;

			}else{
				$response = 1;

			}

		}else{
			$response = 0;

		}
		
		$conn->close();
		return $response;
	}


	
	public function getPost($data)
	{

		$conn = (new classConnection())->getConnect();
		$idCategory = self::getIdCategory($data['category']);
		if(isset($data['page'])){
			$page = ((intval($data['page']) - 1) * 6);
		}else{
			$page = 0;
		}

		$stmt = $conn->prepare("SELECT post.title_post, post.content_post, post.dateCreate_post, post.id_post, img.name_image, img.month_image FROM table_post as post join table_image as img on post.id_post = img.id_post WHERE post.id_category = ? order by post.dateCreate_post desc LIMIT 6 OFFSET ?");


		$stmt->bind_param('si', $idCategory, $page);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		return $result;
	}



	public static function getIdCategory(string $nameCategory)
	{
		$conn = (new classConnection())->getConnect();
		$stmt = $conn->prepare("SELECT name_category, id_category FROM table_category WHERE name_category = ?");
		$stmt->bind_param('s', $nameCategory);
		$stmt->execute();
		$result = $stmt->get_result();
		$resultIdCategory = $result->fetch_assoc();

		return $resultIdCategory['id_category'];
	}


	public static function getCount()
	{
		$conn = (new classConnection())->getConnect();
		$id   = 3;
		$stmt = $conn->prepare("SELECT COUNT(id_post) FROM table_post WHERE id_category = ?");
		$stmt->bind_param('i', $id);
		$stmt->execute();
		$result = $stmt->get_result();

		$num = $result->fetch_assoc();

		return $num;
	}



	public function getPostId($data)
	{

		$conn = (new classConnection())->getConnect();
		$id_post = $data['id_post'];

		$stmt = $conn->prepare("SELECT post.title_post, post.content_post, post.dateCreate_post, post.id_post, img.name_image, img.month_image FROM table_post as post join table_image as img on post.id_post = img.id_post WHERE post.id_post = ? order by post.dateCreate_post desc");

		$stmt->bind_param('s', $id_post);
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt->close();

		return $result;
	}



	public function getLastPost()
	{

		$conn = (new classConnection())->getConnect();
		$limit = 1;
		$stmt = $conn->prepare("SELECT post.id_post, post.title_post, post.content_post, post.dateCreate_post, img.name_image, img.month_image FROM table_post as post JOIN table_image as img ON post.id_post = img.id_post ORDER BY post.dateCreate_post DESC LIMIT ?");

		$stmt->bind_param('i', $limit);

		if($stmt->execute()){
			$result = $stmt->get_result();
			$stmt->close();

			return $result;

		}else{
			return "fail";
		}
	}


}
?>