<?php

namespace App\Http\Controllers;

use App\Models\toDo;
use App\Http\Requests\StoretoDoRequest;
use App\Http\Requests\UpdatetoDoRequest;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoretoDoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoretoDoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\toDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function show(toDo $toDo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\toDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function edit(toDo $toDo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetoDoRequest  $request
     * @param  \App\Models\toDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatetoDoRequest $request, toDo $toDo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\toDo  $toDo
     * @return \Illuminate\Http\Response
     */
    public function destroy(toDo $toDo)
    {
        //
    }
}
