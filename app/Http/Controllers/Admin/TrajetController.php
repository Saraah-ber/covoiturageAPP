<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTrajetRequest;
use App\Models\Trajet;
use DB;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trajets = Trajet::with('type')->orderBy('created_at', 'ASC')->get();
        return view('admin.trajets.index')->with(['trajets' => $trajets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeTrajets = DB::table('types')->select('id','name')->get();
        return view('admin.trajets.create')->with(['typeTrajets' => $typeTrajets]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrajetRequest $request, Trajet $trajet)
    {
        $trajet->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function show(Trajet $trajet)
    {
        return view('admin.trajets.show')->with(['trajet' => $trajet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Trajet  $trajet
     * @return \Illuminate\Http\Response
     */
    public function edit(Trajet $trajet)
    {
        $types = DB::table('types')->select('id','name')->get();
        return view('admin.trajets.edit')->with(['trajet' => $trajet, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTrajetRequest $request, Trajet $trajet)
    {
        $trajet->update([
            'type_id' => $request->type_id,
            'date_départ' => $request->date_départ,
            'date_arrivé' => $request->date_arrivé,
            'Temps_pause' => $request->Temps_pause,
            'Lieu_départ' => $request->Lieu_départ,
            'Lieu_arrivé' => $request->Lieu_arrivé,
        ]);
        return redirect()->route('admin.trajets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Trajet $trajet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trajet $trajet)
    {
        $trajet->delete();
        return redirect()->route('admin.trajets.index');
    }
}
