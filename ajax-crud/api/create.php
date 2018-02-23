<?php
require 'db_config.php';

  $post = $_POST;

  $sql = "INSERT INTO sme (SmeName,SMELastName,SmeEmail,SmePhone,Password) 

	VALUES ('".$post['title']."','".$post['description']."','".$post['email']."','".$post['phone']."','".$post['password']."')";


  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM sme Order by id desc LIMIT 1"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();


echo json_encode($data);
?>