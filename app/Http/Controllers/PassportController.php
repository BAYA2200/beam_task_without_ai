<?php

namespace App\Http\Controllers;

use App\Http\Requests\PassportRequest;
use App\Http\Resources\PassportResourse;
use App\Http\Resources\PersonResourse;
use App\Models\Passport;
use App\Models\Person;
use Illuminate\Http\Request;

class PassportController extends Controller
{
    public function index()
    {
        return PassportResourse::collection(Passport::all());
    }

    public function store(PassportRequest $request)
    {   
        $vali = new PassportResourse($request);
        $have_person = Person::find($vali->person_id);
        if ($have_person){
            return "This person have passport";
        } else{
            $res = new Passport();
        $res->name = $request->name;
        $res->surname = $request->surname;
        $res->patronymic = $request->patronymic;
        $res->person_id = $request->person_id;
        $res->save();
        return response()->json(new PassportResourse($res), 201);
        }
        
    }

    
    public function show(Person $person, Passport $passport){
        $res = new PersonResourse($person);
        $com = new PassportResourse($passport);
        return response()->json([
            'data'=> $com
        ]);
        
    }
    

    
    public function update(Person $person,PassportRequest $request,Passport $passport){
        $res = new PersonResourse($person);
        $com_res = new PassportResourse($passport);
        $data = $request->validated();
        $com_res->update($data);
        return new PassportResourse($com_res);
        
        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Person $person, Passport $passport)
    {
        $res = new PersonResourse($person);
        $com_res = new PassportResourse($passport);
        $passport->delete();
        return response()->noContent();
    }

}
