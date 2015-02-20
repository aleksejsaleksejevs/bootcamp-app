<?php

namespace Bootcamp\Demo\Quiz;

class Question{
    /**
    *Holds options
    *@var int
    *@var array
    *@var string
    *@var type
    */
    private $id;
    private $options;
    private $title;
    private $type;

    public function __construct($title){
        $this->title = $title;
    }

    public function addOption(Option $option){
        $this->options[] = $option;
    }

    public function isMultiAnswer(){
        $count = 0;
        foreach($this->options as $option){
            if($option->isCorrect()===true){
                $count++;
            }
            if($count>1){
                return true;
            }
        }
        return false;
    }

}
