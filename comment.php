<?php
  class Comment
  {
    private $author;
    private $text;

    public function __construct($name, $comment){
      $this->author = $name;
      $this->text   = $comment;
    }

    public function getName(){
        return $this->author;
    }


  }


  $comment = new Comment('name1','comment1');
  var_dump($comment->getName());
  $comment2 = new Comment('name2','comment2');
  $test = new Comment('name3','comment3');

  // $comment->author = 'Peter';
  // $comment2->author = 'John';

  var_dump($comment, $comment2, $test);
