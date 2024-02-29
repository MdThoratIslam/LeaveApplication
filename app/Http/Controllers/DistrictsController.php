<?php

namespace App\Http\Controllers;
use App\Models\Districts;
use App\Http\Requests\StoreDistrictsRequest;
use App\Http\Requests\UpdateDistrictsRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class DistrictsController extends Controller
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
    public function store(StoreDistrictsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($division_id)
    {
         try {
             $district = Districts::select('id', 'name')->where('division_id', $division_id)->get()->toArray();
             return response()->json(['data' => $district]);
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
    public function edit(Districts $districts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDistrictsRequest $request, Districts $districts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Districts $districts)
    {
        //
    }
}
