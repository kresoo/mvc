<?php

class Model_shop extends Model_BaseModel
{
    public function __construct()
    {  
        $this->initDb();
    }
    
    public function select_product()
    {
        $sth = $this->_db->prepare('SELECT * FROM product');
        $sth->execute();

        return $sth->fetchAll();
    }
    public function select_details($arg){
        
        
        $sth = $this->_db->prepare('SELECT * FROM product WHERE id IN ('.$arg.')');
        $sth->execute();
        
        return $sth->fetchAll();
        
    }
}
