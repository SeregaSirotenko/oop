<?php

class Email
{
    private $address;
    private $topic;
    private $message;
    public function send() {
        return 'Письмо успешно добавленно на почту ' . $this -> address;
    }
    function __construct($address, $topic, $message)
    {
        $this -> address = $address;
        $this -> topic = $topic;
        $this -> message = $massage;
    }
}