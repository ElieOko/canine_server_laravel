<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PersonnelCollection;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Personnel::all();
        if($data->count() != 0 ){
            return new PersonnelCollection($data);
        }
        return response()->json([
            "message"=>"Ressource not found",
        ],400);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data['error'] = null ;
        $data['sys']   = "" ;
        $validator = Validator::make($request->all(),[
            'nom' => 'required|string',
            'postnom' => 'required|string',
            'prenom' => 'required|string',
            'genre' => 'required|string',
            'telephone' => 'string',
            'adresse' => 'string',
            'profession_id' => 'int',
            'image_profil' =>'string',
            'date_naissance' => 'date',
            'user_id' => 'int',
        ]);

        if(!$validator->stopOnFirstFailure()->fails()) {
            $validated = $validator->validated();
            $matricule =$this->matricule_ext . count(Personnel::all()) + 1;
            $personnel = Personnel::updateOrCreate([
            'matricule' => $matricule,
            'nom' => $validated['nom'],
            'postnom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'adresse' => $validated['adresse']??"",
            'profession_id' => $validated['profession_id'],
            'genre' => $validated['genre'],
            'telephone' => $validated['telephone']??"",
            'date_naissance' => $validated['date_naissance']??"",
            'user_id' => $validated['user_id'],
            'is_active' => true
            ]);
            $data['sys'] = $personnel;
            return $data;
        }
        $data['error']= $validator->errors()??"";
        return $data;
    }

    public function filter(Request $request){
        $data = Personnel::query()->when(
            request('matricule'), function ($q) {
            return $q->where('matricule', request('matricule'));
        })->with('user')->get();
        return response($data,201);
    }
    /**
     * Display the specified resource.
     */
    public function show(Personnel $personnel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Personnel $personnel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Personnel $personnel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Personnel $personnel)
    {
        //
    }
}
