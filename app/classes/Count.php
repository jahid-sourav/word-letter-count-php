<?php

namespace App\classes;

class Count
{
    public $userString;

    public function __construct($data)
    {
        $this->userString  = $data['user_string'];
    }

    public function countword()
    {
          return str_word_count($this->userString);
    }

    public function countletter()
    {
          return strlen($this->userString);
    }
}


























