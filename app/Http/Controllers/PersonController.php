<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PersonResources;
use App\Http\Resources\PersonResoutcesCollection;
use App\Person;
class PersonController extends Controller
{
    public function show(Person $person):PersonResources{
        return new PersonResources($person);
    }

    public function index():PersonResoutcesCollection{
        return new PersonResoutcesCollection(Person::paginate());
    }

    public function store(Request $request):PersonResources
    {
        $request->validate([
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'city'          => 'required',
        ]);

        $person = Person::create($request->all());

        return new PersonResources($person);
    }

    public function update(Person $person, Request $request)
    {
        $person->update($request->all()); 

        return new PersonResources($person);
    }

    public function destroy(Person $person)
    {
        $person->delete();

        return response()->json([
            'message' => 'Delete Success'
        ]);
    }
}
