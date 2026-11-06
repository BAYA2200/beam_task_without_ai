<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonRequest;
use App\Http\Resources\PassportResourse;
use App\Http\Resources\PersonResourse;
use App\Models\Passport;
use App\Models\Person;

class PersonController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PassportResourse::collection(Person::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonRequest $request)
    {
        $post = $request->validated();
        $posw = Person::create($post);
        return response()->json(new PersonResourse($posw), 201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {   
        return new PersonResourse($person);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonRequest $request, Person $person)
    {   
        
        $data = $request->validated();
        $person->update($data);
        return new PersonResourse($person);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person)
    {
        $person->delete();
        return response()->noContent();
    }
}
