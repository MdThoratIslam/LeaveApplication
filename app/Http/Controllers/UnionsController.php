<?php

namespace App\Http\Controllers;

use App\Models\Unions;
use App\Http\Requests\StoreUnionsRequest;
use App\Http\Requests\UpdateUnionsRequest;

class UnionsController extends Controller
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
    public function store(StoreUnionsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($upazila_id)
    {
         try {
            $unions = Unions::select('id', 'name')->where('upazilla_id', $upazila_id)->get()->toArray();
            return response()->json(['data' => $unions]);
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
        }    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Unions $unions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUnionsRequest $request, Unions $unions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Unions $unions)
    {
        //
    }
}
