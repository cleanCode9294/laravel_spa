<?php

namespace App\Http\Controllers\Person;

use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class ShowController
{
    public function __invoke(Person $person)
    {
        return new PersonResource($person);
    }
}
