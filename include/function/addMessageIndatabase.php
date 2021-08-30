<?php

function addMessageInDatabase($message) {

    $newMessage = new Message();
    $newMessage->setMessage($message);

    $messageOk = $newMessage->getMessage();
    $userName  = $_SESSION['username'];


}