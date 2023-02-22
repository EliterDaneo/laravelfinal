<?php

namespace App\Http\Controllers;

use App\Models\Sewas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $sewas = Sewas::all();

        return view('sewa.index')->with([
            'sewas' => Sewas::all(),
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewas  $sewas
     * @return \Illuminate\Http\Response
     */
    public function show(Sewas $sewas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewas  $sewas
     * @return \Illuminate\Http\Response
     */
    public function edit(Sewas $sewas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sewas  $sewas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sewas $sewas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewas  $sewas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sewas $sewas)
    {
        //
    }
}
