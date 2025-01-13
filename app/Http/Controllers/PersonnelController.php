<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
            'profession_id' => 'string',
            'image_profil' =>'string',
            'date_naissance' => 'date',
            'user_id' => 'int',
        ]);

        if(!$validator->stopOnFirstFailure()->fails()) {
            $validated = $validator->validated();
            $personnel = Personnel::updateOrCreate([
            'nom' => $validated['nom'],
            'postnom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'adresse' => $validated['adresse'],
            'profession_id' => $validated['profession_id'],
            'genre' => $validated['genre'],
            'telephone' => $validated['telephone'],
            'date_naissance' => $validated['date_naissance'],
            'user_id' => $validated['user_id'],
            'is_active' => true
            ]);
            $data['sys'] = $personnel;
            return $data;
        }
        $data['error']= $validator->errors()??"";
        return $data;
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
