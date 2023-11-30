<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JournalismTranslate\StoreRequest;
use App\Http\Requests\Admin\JournalismTranslate\UpdateRequest;
use App\Http\Resources\Admin\JournalismTranslateResource;
use App\Models\JournalismTranslate;
use Illuminate\Http\Request;

class JournalismTranslateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journalismTranslates = JournalismTranslate::all();

        return JournalismTranslateResource::collection($journalismTranslates);
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
        $journalismTranslate = JournalismTranslate::create($data);

        return JournalismTranslateResource::make($journalismTranslate);
    }

    /**
     * Display the specified resource.
     */
    public function show(JournalismTranslate $journalismTranslate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JournalismTranslate $journalismTranslate)
    {
        return JournalismTranslateResource::make($journalismTranslate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, JournalismTranslate $journalismTranslate)
    {
        $data = $request->validated();
        $journalismTranslate->update($data);

        return JournalismTranslateResource::make($journalismTranslate);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JournalismTranslate $journalismTranslate)
    {
        $journalismTranslate->delete();

        return response([
                            'message' => 'Journalism translate has been delete'
                        ]);
    }
}
