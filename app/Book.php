<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
        public function setName($name)
    {
        $this->name = $name;
    }
        public function getName()
    {
        return $this->name;
    }
}
