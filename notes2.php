<?php
    class Types {
    public $black;
    public $white;
    public $latino;

             function __construct($black, $white, $latino) {
             $this->black = $black;
             $this->white = $white;
             $this->breed = $latino;
             }

             function getType() { 
             return {$this->black} .
             {$this->white};
             }
    }

?>