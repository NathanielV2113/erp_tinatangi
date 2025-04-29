<?php

namespace App\Http\Controllers;

use App\Models\MandatoryDeduction;
use App\Http\Requests\StoreMandatoryDeductionRequest;
use App\Http\Requests\UpdateMandatoryDeductionRequest;

class MandatoryDeductionController extends Controller
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
    public function store(StoreMandatoryDeductionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MandatoryDeduction $mandatoryDeduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MandatoryDeduction $mandatoryDeduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMandatoryDeductionRequest $request, MandatoryDeduction $mandatoryDeduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MandatoryDeduction $mandatoryDeduction)
    {
        //
    }
}
