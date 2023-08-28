<?php

namespace Breuermarcel\PowerConsumption\Http\Controllers;

use Breuermarcel\PowerConsumption\Models\ElectricityConsumption;
use Breuermarcel\PowerConsumption\Models\WaterConsumption;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $electricity = ElectricityConsumption::all();
        $water = WaterConsumption::all();

        return view('power-consumption::dashboard', compact('electricity', 'water'));
    }
}
