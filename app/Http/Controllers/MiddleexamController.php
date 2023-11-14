<?php

namespace App\Http\Controllers;

use App\Models\middleexam;
use App\Http\Requests\StoremiddleexamRequest;
use App\Http\Requests\UpdatemiddleexamRequest;

class MiddleexamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('public.middleexam');
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
    public function store(StoremiddleexamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(middleexam $middleexam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(middleexam $middleexam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatemiddleexamRequest $request, middleexam $middleexam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(middleexam $middleexam)
    {
        //
    }
}
