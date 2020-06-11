<?php

namespace classes;

class shop  {
	public $shopname;

    protected $color;

    function __construct($shopname, $color)
    {
        $this->shopname = $shopname;
        $this->color = $color;
    }

    function what_name() 
    {
        return $this->shopname;
    }

    function what_color() 
    {
        return $this->color;
    }

}
