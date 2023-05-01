<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;

class IndexController
{
    public function __invoke()
    {
        $people = Person::all();
        return $people;
    }
}
