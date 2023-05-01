<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;

class ShowController
{
    public function __invoke(Person $person)
    {
        return $person;
    }
}
