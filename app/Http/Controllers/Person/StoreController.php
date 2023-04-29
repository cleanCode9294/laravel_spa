<?php

namespace App\Http\Controllers\Person;

use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;

class StoreController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $person = Person::create($data);
        return $person;
    }
}
