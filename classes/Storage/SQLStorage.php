<?php

namespace Bootcamp\Demo\Storage;

class SQLStorage implements Storage{
    public function store($place, $data);

    public function get($place);
}
