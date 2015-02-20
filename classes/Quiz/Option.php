<?php

namespace Bootcamp\Demo\Quiz;

class Option{
    /**
    *Holds options
    *@var int
    *@var string
    *@var boolean
    */
    private $id;
    private $name;
    private $isCorrect;



    public function __construct($name, $isCorrect=false)
    {
        $this->name = $name;
        $this->isCorrect = $isCorrect;
    }

    public function isCorrect()
    {
        return $this->isCorrect;
    }

}
