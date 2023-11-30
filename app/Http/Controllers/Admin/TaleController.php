<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tale\StoreRequest;
use App\Http\Requests\Admin\Tale\UpdateRequest;
use App\Http\Resources\Admin\TaleResource;
use App\Models\Tale;
use Illuminate\Http\Request;

class TaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tales = Tale::all();

        return TaleResource::collection($tales);
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
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tale = Tale::create($data);

        return TaleResource::make($tale);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tale $tale)
    {
        return TaleResource::make($tale);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tale $tale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tale $tale)
    {
        $data = $request->validated();
        $tale->update($data);

        return TaleResource::make($tale);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tale $tale)
    {
        $tale->delete();

        return response([
            'message' => 'Tale has been delete'
            ]);
    }
}
