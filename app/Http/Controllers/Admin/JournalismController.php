<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Journalism\StoreRequest;
use App\Http\Requests\Admin\Journalism\UpdateRequest;
use App\Http\Resources\Admin\JournalismResource;
use App\Models\Journalism;
use Illuminate\Http\Request;

class JournalismController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journalisms = Journalism::all();

        return JournalismResource::collection($journalisms);
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
        $journalism = Journalism::create($data);

        return JournalismResource::make($journalism);
    }

    /**
     * Display the specified resource.
     */
    public function show(Journalism $journalism)
    {
        return JournalismResource::make($journalism);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Journalism $journalism)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Journalism $journalism)
    {
        $data = $request->validated();
        $journalism->update($data);

        return JournalismResource::make($journalism);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journalism $journalism)
    {
        $journalism->delete();

        return response([
                            'message' => 'Journalism has been delete'
                        ]);
    }
}
