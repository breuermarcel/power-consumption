<?php

namespace Breuermarcel\PowerConsumption\Http\Controllers;

use Illuminate\Http\Request;
use Breuermarcel\PowerConsumption\Models\ElectricityConsumption;

class ElectricityConsumptionController extends Controller
{
    public function index()
    {
        // todo scope auth user
        $electricityConsumptions = ElectricityConsumption::all();

        return view("power-consumption::electricity.index", compact("electricityConsumptions"));
    }

    public function create()
    {
        return view("power-consumption::electricity.create");
    }

    public function store(Request $request)
    {
        // todo validate
        ElectricityConsumption::create($request->all());

        return to_route("power-consumptions.electricity.index");
    }

    public function edit(ElectricityConsumption $electricityConsumption)
    {
        return view("power-consumption::electricity.edit", compact("electricityConsumption"));
    }

    public function update(ElectricityConsumption $electricityConsumption, Request $request)
    {
        // todo validate
        $electricityConsumption->update($request->all());

        return to_route("power-consumption.electricity.index");
    }

    public function destroy(ElectricityConsumption $electricityConsumption) {
        $electricityConsumption->delete();

        return to_route("power-consumption.electricity.index");
    }
}
