<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LitReview\StoreRequest;
use App\Http\Requests\Admin\LitReview\UpdateRequest;
use App\Http\Resources\Admin\LitReviewResource;
use App\Models\LitReview;
use Illuminate\Http\Request;

class LitReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $litReviews = LitReview::all();

        return LitReviewResource::collection($litReviews);
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
        $litReview = LitReview::create($data);

        return LitReviewResource::make($litReview);
    }

    /**
     * Display the specified resource.
     */
    public function show(LitReviewController $litReview)
    {
        return LitReviewResource::make($litReview);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LitReviewController $litReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, LitReviewController $litReview)
    {
        $data = $request->validated();
        $litReview->update($data);

        return LitReviewResource::make($litReview);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LitReview $litReview)
    {
        $litReview->delete();

        return response([
                            'message' => 'Lit review has been delete'
                        ]);
    }

}
