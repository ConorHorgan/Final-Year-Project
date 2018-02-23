<?php
require 'db_config.php';


  $id  = $_POST["id"];
  $post = $_POST;

  $sql = "UPDATE sme SET SmeName = '".$post['title']."'

    ,description = '".$post['description']."' 

    WHERE id = '".$id."'";

  $result = $mysqli->query($sql);


  $sql = "SELECT * FROM sme WHERE id = '".$id."'"; 

  $result = $mysqli->query($sql);

  $data = $result->fetch_assoc();


echo json_encode($data);
?>