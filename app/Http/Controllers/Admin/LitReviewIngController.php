<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LitReviewIng\StoreRequest;
use App\Http\Requests\Admin\LitReviewIng\UpdateRequest;
use App\Http\Resources\Admin\LitReviewIngResource;
use App\Models\LitReviewIng;
use Illuminate\Http\Request;

class LitReviewIngController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $litReviewsIng = LitReviewIng::all();

        return LitReviewIngResource::collection($litReviewsIng);
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
        $litReviewIng = LitReviewIng::create($data);

        return LitReviewIngResource::make($litReviewIng);
    }

    /**
     * Display the specified resource.
     */
    public function show(LitReviewIngController $litReviewIng)
    {
        return LitReviewIngResource::make($litReviewIng);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LitReviewIngController $litReviewIng)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, LitReviewIngController $litReviewIng)
    {
        $data = $request->validated();
        $litReviewIng->update($data);

        return LitReviewIngResource::make($litReviewIng);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LitReviewIng $litReviewIng)
    {
        $litReviewIng->delete();

        return response([
                            'message' => 'Lit review(ing) has been delete'
                        ]);
    }
}
