<?php

namespace App\Http\Controllers\Person;

use App\Models\Person;

class DeleteController
{
    public function __invoke(Person $person)
    {
        $person->delete();
        return $person;
    }
}
