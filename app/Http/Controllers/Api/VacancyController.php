<?php

namespace App\Http\Controllers\Api;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::all();
        return response()->json(compact('vacancies'), 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vacancy = Vacancy::create([
            'jobOffer' => $request->jobOffer,
            'jobVacancyStatus' => $request->jobVacancyStatus
        ]);
        $vacancy->save();
        return response()->json($vacancy, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $vacancy = Vacancy::find($id);

        return response()->json($vacancy, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(string $id)
    {
        
    } */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vacancy = Vacancy::find($id);

        $vacancy->update([
            'jobOffer' => $request->jobOffer,
            'jobVacancyStatus' => $request->jobVacancyStatus
        ]);
        $vacancy->save();
        return response()->json($vacancy, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();
    }
}
