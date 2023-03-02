<?php

namespace App\Http\Controllers;

use App\Models\OperationStatus;
use App\Http\Requests\StoreOperationStatusRequest;
use App\Http\Requests\UpdateOperationStatusRequest;

class OperationStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreOperationStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperationStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OperationStatus  $operationStatus
     * @return \Illuminate\Http\Response
     */
    public function show(OperationStatus $operationStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OperationStatus  $operationStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(OperationStatus $operationStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperationStatusRequest  $request
     * @param  \App\Models\OperationStatus  $operationStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperationStatusRequest $request, OperationStatus $operationStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OperationStatus  $operationStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(OperationStatus $operationStatus)
    {
        //
    }
}
