<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ScienceArticle\StoreRequest;
use App\Http\Requests\Admin\ScienceArticle\UpdateRequest;
use App\Http\Resources\Admin\ScienceArticleResource;
use App\Models\ScienceArticle;
use Illuminate\Http\Request;

class ScienceArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scienceArticles = ScienceArticle::all();

        return ScienceArticleResource::collection($scienceArticles);
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
        $scienceArticle = ScienceArticle::create($data);

        return ScienceArticleResource::make($scienceArticle);
    }

    /**
     * Display the specified resource.
     */
    public function show(ScienceArticle $scienceArticle)
    {
        return ScienceArticleResource::make($scienceArticle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScienceArticle $scienceArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, ScienceArticle $scienceArticle)
    {
        $data = $request->validated();
        $scienceArticle->update($data);

        return ScienceArticleResource::make($scienceArticle);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScienceArticle $scienceArticle)
    {
        $scienceArticle->delete();

        return response([
                            'Science article' => 'Kic has been delete'
                        ]);
    }
}
