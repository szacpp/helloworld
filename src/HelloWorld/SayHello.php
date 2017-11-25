<?php 

namespace HelloWorld;

class SayHello
{
    private $name;
    public function __construct() {
        $this->name= "zubair";
    }
    
    public function getname(){
        return $this->name;
    }
    
}