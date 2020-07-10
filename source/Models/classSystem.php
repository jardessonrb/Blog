<?php

namespace Source\Models;


Class classSystem
{

	public static function createIdPost()
	{

		$bytes = random_bytes(5);
        $crypto_id = bin2hex($bytes);

        return $crypto_id;

	}

	public static function renameImage($foto)
	{
   
        $names = explode('.', $foto['name']);
        $ex = end($names);
        date_default_timezone_set('America/Sao_Paulo');
        $novoNome = md5(date("j-n-H-i")).'.'.$ex;

        return $novoNome;

	}

	public static function createDirectory(){
		$month = date("F");
		$dir = SITE_ROOT.'/Images/'.$month;

		if(is_dir($dir)){
			return $dir;
		}else{
			mkdir($dir);
			return $dir;
		}
	}

}

?>