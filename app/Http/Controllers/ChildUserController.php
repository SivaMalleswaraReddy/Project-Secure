<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChildUserRequest;
use App\Http\Requests\UpdateChildUserRequest;
use App\Models\ChildUser;

class ChildUserController extends Controller
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
     * @param  \App\Http\Requests\StoreChildUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChildUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChildUser  $childUser
     * @return \Illuminate\Http\Response
     */
    public function show(ChildUser $childUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChildUser  $childUser
     * @return \Illuminate\Http\Response
     */
    public function edit(ChildUser $childUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateChildUserRequest  $request
     * @param  \App\Models\ChildUser  $childUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChildUserRequest $request, ChildUser $childUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChildUser  $childUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChildUser $childUser)
    {
        //
    }
}
