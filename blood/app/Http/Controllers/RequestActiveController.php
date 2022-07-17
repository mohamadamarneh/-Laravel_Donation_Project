<?php

namespace App\Http\Controllers;

use App\Models\request_active;
use App\Http\Requests\Storerequest_activeRequest;
use App\Http\Requests\Updaterequest_activeRequest;

class RequestActiveController extends Controller
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
     * @param  \App\Http\Requests\Storerequest_activeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerequest_activeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\request_active  $request_active
     * @return \Illuminate\Http\Response
     */
    public function show(request_active $request_active)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\request_active  $request_active
     * @return \Illuminate\Http\Response
     */
    public function edit(request_active $request_active)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterequest_activeRequest  $request
     * @param  \App\Models\request_active  $request_active
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterequest_activeRequest $request, request_active $request_active)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\request_active  $request_active
     * @return \Illuminate\Http\Response
     */
    public function destroy(request_active $request_active)
    {
        //
    }
}
