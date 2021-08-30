<?php

class Message {
    private $message;
    

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $cleanMessage  = htmlspecialchars($message);
        $this->message = $cleanMessage;
    }
}