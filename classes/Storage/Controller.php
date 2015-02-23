<?php

namespace Bootcamp\Demo\Storage;

class Controller{
    public function __construct(Storage $store)
    {
        $this->s = $store;
    }

    public function doSomeThings()
    {
        $data = $_REQUEST;
        $this->s->store("tmp", $date);
    }
}
