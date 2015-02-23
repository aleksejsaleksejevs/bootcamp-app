<?php

namespace Bootcamp\Demo\Quiz;

class Question{
    /**
    *Holds options
    *@param int
    *@param array
    *@param string
    *@param type
    */
    private $id;
    private $options;
    private $title;
    private $type;


    public function __construct($title){
        $this->title = $title;
        $this->option = [];
    }

    public function addOption(Option $option){
        $correctAnswerCount = 0;
        if(true===$option->isCorrect())
        {
            $this->correctAnswerCount++;
        }
    }

    public function isMultiAnswer(){
        if($this->correctAnswerCount > 1)
        {
            return true;
        }
        return false;
    }

}
