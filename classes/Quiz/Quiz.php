<?php

namespace Bootcamp\Demo\Quiz;

class Quiz{
    /**
    *Holds options
    *@var int
    *@var string
    *@var array
    */
    private $name;
    private $questions;

    public function __construct($title){
        $this->name = $title;
    }

    public function addQuestion(Question $question){
        $this->questions[] = $question;
    }


    }
