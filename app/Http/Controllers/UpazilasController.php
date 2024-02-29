<?php

namespace App\Http\Controllers;

use App\Models\Upazilas;
use App\Http\Requests\StoreUpazilasRequest;
use App\Http\Requests\UpdateUpazilasRequest;

class UpazilasController extends Controller
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
    public function store(StoreUpazilasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($district_id)
    {
        try {
            $upazilas = Upazilas::select('id', 'name')->where('district_id', $district_id)->get()->toArray();
            return response()->json(['data' => $upazilas]);
        }
        catch (ModelNotFoundException $e)
        {
            return response()->json(
                [ 'error' => 'Resource not found.']);
        }
        catch (\Exception $e)
        {
            return response()->json(
                [ 'error' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Upazilas $upazilas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUpazilasRequest $request, Upazilas $upazilas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Upazilas $upazilas)
    {
        //
    }
}
