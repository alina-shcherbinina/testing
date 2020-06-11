<?php
namespace classes;

class area extends shop {

    public $areaname = 'strange area';

    public $item = 'apple';

    function __construct()
    {
        parent::__construct('walmart','blue');
    }
    function what_grocieres() 
    {            
            return $this->item;

    }

    function what_area() 
    {
        
      return $this->areaname;
    }
    
}