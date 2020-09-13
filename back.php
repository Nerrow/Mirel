<?php
$name - $_POST['name'];
$mail - $_POST['mail'];
$comment - $_POST['comment'];

$result = mail("memeboys1337@gmail.com", "Вопрос с сайта", "$name \n $mail \n $comment");  
?>