<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarInfoRequest;
use App\Http\Requests\UpdateCarInfoRequest;
use App\Models\CarInfo;

class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCarInfoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CarInfo $carInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarInfo $carInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarInfoRequest $request, CarInfo $carInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarInfo $carInfo)
    {
        //
    }
}
