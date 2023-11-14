<?php

namespace App\Http\Controllers;

use App\Models\selfstudy;
use App\Http\Requests\StoreselfstudyRequest;
use App\Http\Requests\UpdateselfstudyRequest;

class SelfstudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.selfstudy');
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
    public function store(StoreselfstudyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(selfstudy $selfstudy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(selfstudy $selfstudy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateselfstudyRequest $request, selfstudy $selfstudy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(selfstudy $selfstudy)
    {
        //
    }
}
