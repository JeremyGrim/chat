<?php


    include "message.php";

    $pseudo = '';
    $message = '';

    $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    $post = new Message($pseudo,$message);
    $post->savePost();
    $postArray = $post->displayPost();









?>


