<?php
/* 	try{
		$pdo=new PDO("mysql:host=localhost;dbname=convertion-unit","root","");
	}
	catch(PDOException $e){
		echo $e->getMessage();
	} */
	try {
		$pdo = new PDO("mysql:host=db2;dbname=converter-unit", "php_docker", "password");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?> 