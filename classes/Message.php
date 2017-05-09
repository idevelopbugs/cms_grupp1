<?php

class Message
{
    static function showMessage($message)
    {
        if(!empty($message)){
            echo $message;
            echo "<br>";
        } 
    }
}