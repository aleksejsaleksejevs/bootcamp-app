<?php
if (isset($_REQUEST['name'])){
   setcookie("NameCookie", $_REQUEST['name'], time()+3600);

}






$link = mysqli_connect("localhost", "homestead", "secret", "bootcamp");

$users_name = $_REQUEST['name'];

$users_comment = $_REQUEST['comment'];

$query="INSERT INTO Comments (author, comment)  VALUES ('$users_name','$users_comment')";

mysqli_query($link, $query);


// $comments = json_decode(file_get_contents('file.json'), true);
//
// $newComment = [
//   'author' => $_REQUEST['name'],
//   'content' => $_REQUEST['name']
// ];
//
// $comments[] = $newComment;
// /*
// var_dump($newComment);
// var_dump($comments);
//
// echo json_encode($comments);
// */
//
// file_put_contents('file.json', json_encode($comments));


//var_dump($comments);
 header ('Location: comments-app.php');
