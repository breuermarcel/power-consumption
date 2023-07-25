<?php

namespace Breuermarcel\PowerConsumption\Http\Controllers;

use Illuminate\Http\Request;
use Breuermarcel\PowerConsumption\Models\WaterConsumption;

class WaterConsumptionController extends Controller
{
    public function index()
    {
        // todo scope auth user
        $waterConsumptions = WaterConsumption::all();

        return view("power-consumption::water.index", compact("waterConsumptions"));
    }

    public function create()
    {
        return view("power-consumption::water.create");
    }

    public function store(Request $request)
    {
        // todo validate
        WaterConsumption::create($request->all());

        return to_route("power-consumption.water.index");
    }

    public function edit(WaterConsumption $waterConsumption)
    {
        return view("power-consumption::water.edit", compact("waterConsumption"));
    }

    public function update(WaterConsumption $waterConsumption, Request $request)
    {
        // todo validate
        $waterConsumption->update($request->all());

        return to_route("power-consumption.water.index");
    }

    public function destroy(WaterConsumption $waterConsumption)
    {
        $waterConsumption->delete();

        return to_route("power-consumption.water.index");
    }
}
