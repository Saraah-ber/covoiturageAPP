<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVehiculeRequest;
use Illuminate\Http\Request;
use App\Models\Assurance;
use App\Models\Vehicule;
use Illuminate\Support\Arr;
use DB;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicules = Vehicule::with(['assurance' => function($q){
            $q->select('id', 'police','date_fin');
        }])->orderBy('created_at', 'DESC')->get();
/*        return response()->json($vehicules);
        die();*/
        return view('admin.vehicules.index')->with(['vehicules' => $vehicules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeAssurances = DB::table('type_assurances')->select('id','name')->get();
        $assurances = Assurance::all();
        return view('admin.vehicules.create')->with(['typeAssurances' => $typeAssurances, 'assurances' => $assurances]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVehiculeRequest $request, Vehicule $vehicule)
    {
        $vehicule->create($request->all());
        return redirect()->route('admin.vehicules.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicule $vehicule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        $vehicule->delete();
        $vehicule->assurance()->delete();
        return redirect()->route('admin.vehicules.index');
    }
}
