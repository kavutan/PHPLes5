<?php 
namespace my; 
class Order 
{ 
    public function run(array $data) 
    { 
        return sort($data); 
    } 
} 
?>