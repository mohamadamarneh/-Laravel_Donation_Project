<?php

namespace App\Http\Controllers;

use App\Models\request_doner;
use App\Http\Requests\Storerequest_donerRequest;
use App\Http\Requests\Updaterequest_donerRequest;

class RequestDonerController extends Controller
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
     * @param  \App\Http\Requests\Storerequest_donerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storerequest_donerRequest $request)
    {
        $data = $request->all();
        request_doner::create($data);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\request_doner  $request_doner
     * @return \Illuminate\Http\Response
     */
    public function show(request_doner $request_doner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\request_doner  $request_doner
     * @return \Illuminate\Http\Response
     */
    public function edit(request_doner $request_doner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updaterequest_donerRequest  $request
     * @param  \App\Models\request_doner  $request_doner
     * @return \Illuminate\Http\Response
     */
    public function update(Updaterequest_donerRequest $request,  $id)
    {
        $data = array('status'=> $request->input('status'));
        request_doner::whereId($id)->update($data);
        $r =  request_doner::where('id',$id)->first();
        
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\request_doner  $request_doner
     * @return \Illuminate\Http\Response
     */
    public function destroy(request_doner $request_doner)
    {
        //
    }
}
