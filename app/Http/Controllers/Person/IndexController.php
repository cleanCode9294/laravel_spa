<?php

namespace App\Http\Controllers\Person;

use App\Http\Resources\Person\PersonResource;
use App\Models\Person;

class IndexController
{
    public function __invoke()
    {
        $people = Person::all();
        return PersonResource::collection($people);
    }
}
