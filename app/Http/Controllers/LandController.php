<?php

//LandCon.php

namespace App\Http\Controllers;

use App\Models\Land;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;



class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("list",["lands"=>Land::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation du formulaire
       $validatedData = $request->validate([
            'capitale' => 'required',
            'Libelle' => 'required',
            'code_indicatif' => 'required | integer | unique:lands',
            'population' => 'required | integer',
            'Superficie' => 'required | integer',
            'Continent' => 'required',
            'monnaie' => 'required',
            'langue' => 'required',
            'est_laique' => 'required',
        ]);

         //Enregistrement de land dans la bd

         $description = Str::random(16);

        Land::create([
            "Libelle" => $request->get('Libelle'),
            "description" => $description,
            "code_indicatif" => $request->get('code_indicatif'),
            "Continent" => $request->get('Continent'),
            "population" => $request->get('population'),
            "capitale"=> $request->get('capitale'),
            "monnaie" => $request->get('monnaie'),
            "langue" => $request->get('langue'),
            "Superficie" => $request->get('Superficie'),
            "est_laique" => $request->get('est_laique')
        ]);

        return redirect()->route('list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$lands=Land::all();
        $land=Land::FindOrFail($id);
        return view("update", ["land"=>$land]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'capitale' => 'required',
            'Libelle' => 'required',
            'code_indicatif' => 'required | integer | unique:lands',
            'population' => 'required | integer',
            'Superficie' => 'required | integer',
            'Continent' => 'required',
            'monnaie' => 'required',
            'langue' => 'required',
            'est_laique' => 'required',
        ]);

        Land::whereId($id)->update($validatedData);

        return redirect()->route('list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $land = Land::findOrFail($id);
        $land->delete();

        return redirect()->route('list');
    }
}
