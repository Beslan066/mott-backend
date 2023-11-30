<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Kic\StoreRequest;
use App\Http\Requests\Admin\Kic\UpdateRequest;
use App\Http\Resources\Admin\KicResource;
use App\Models\Kic;
use Illuminate\Http\Request;

class KicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kics = Kic::all();

        return KicResource::collection($kics);
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
        $kic = Kic::create($data);

        return KicResource::make($kic);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kic $kic)
    {
        return KicResource::make($kic);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kic $kic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Kic $kic)
    {
        $data = $request->validated();
        $kic->update($data);

        return KicResource::make($kic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kic $kic)
    {
        $kic->delete();

        return response([
                            'message' => 'Kic has been delete'
                        ]);
    }
}
