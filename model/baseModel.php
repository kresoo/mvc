<?php

class Model_BaseModel
{
    protected $_db = '';

    public function __construct()
    {}
    
    public function initDb()
    {
        $this->_db = new PDO('mysql:host=localhost;dbname=obuka', 'root', 'mysql');
    }
}
