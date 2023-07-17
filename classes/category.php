<?php

class category{
    public $type;
    public $target;
    
    function __construct(String $type,String $target){
        $this->type = $type;
        $this->target = $target;
    }
}

?>