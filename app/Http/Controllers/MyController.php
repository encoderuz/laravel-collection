<?php

namespace App\Http\Controllers;

use App\Models\My;
use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();


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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(My $my)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(My $my)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, My $my)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(My $my)
    {
        //
    }
}
