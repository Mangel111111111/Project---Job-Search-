<?php

namespace App\Http\Controllers\Api;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /* public function index()
    {
        //
    } */

    /**
     * Show the form for creating a new resource.
     */
   /*  public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
        public function store(Request $request, $vacancyId)
    {
        $validated = $request->validate([
            'news' => 'required|array',
        ]);

        $vacancy = Vacancy::find($vacancyId);

        if (!$vacancy) {
            return response()->json([
                'message' => 'The work for which follow-up is claimed does not exist'
            ], 404);
        }

        $followsData = collect($validated['news'])->map(function ($newsItem) use ($vacancy) {
            return [
                'work_id' => $vacancy->id,
                'news' => $newsItem,
            ];
        });

        $vacancy->follows()->createMany($followsData);

        return response()->json([
            'message' => 'New items added correctly',
            'vacancy' => $vacancy->load('follows'),
        ]);
    }


    /**
     * Display the specified resource.
     */
    /* public function show(string $id)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(string $id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     */
    /* public function update(Request $request, string $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
    /* public function destroy(string $id)
    {
        //
    } */
}
