<?php

namespace App\Http\Controllers;

use App\Models\retraining;
use App\Http\Requests\StoreretrainingRequest;
use App\Http\Requests\UpdateretrainingRequest;

class RetrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.retraining');
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
    public function store(StoreretrainingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(retraining $retraining)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(retraining $retraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateretrainingRequest $request, retraining $retraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(retraining $retraining)
    {
        //
    }
}
