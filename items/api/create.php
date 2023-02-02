<?php


require '../../db.php';

  $post = $_POST;


  $sql = "INSERT INTO items (title,description) 


	VALUES ('".$post['title']."','".$post['description']."')";


  $result = $conn->query($sql);


  $sql = "SELECT * FROM items Order by id desc LIMIT 1"; 


  $result = $conn->query($sql);


  $data = $result->fetch_assoc();


echo json_encode($data);


?>