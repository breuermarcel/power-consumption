<?php

use Breuermarcel\PowerConsumption\Http\Controllers\DashboardController;
use Breuermarcel\PowerConsumption\Http\Controllers\ElectricityConsumptionController;
use Breuermarcel\PowerConsumption\Http\Controllers\WaterConsumptionController;

Route::get('/', DashboardController::class)->name('dashboard');

Route::prefix('electricity')->group(function () {
    Route::get('/', [ElectricityConsumptionController::class, 'index'])->name('electricity.index');
    Route::get('/create', [ElectricityConsumptionController::class, 'create'])->name('electricity.create');
    Route::post('/store', [ElectricityConsumptionController::class, 'store'])->name('electricity.store');
    Route::get('/{electricity}/edit', [ElectricityConsumptionController::class, 'edit'])->name('electricity.edit');
    Route::patch('/{electricity}/update', [ElectricityConsumptionController::class, 'index'])->name('electricity.update');
    Route::delete('/{electricity}/destroy', [ElectricityConsumptionController::class, 'destroy'])->name('electricity.destroy');
});

Route::prefix('/water')->group(function () {
    Route::get('/', [WaterConsumptionController::class, 'index'])->name('water.index');
    Route::get('/create', [WaterConsumptionController::class, 'create'])->name('water.create');
    Route::post('/store', [WaterConsumptionController::class, 'store'])->name('water.store');
    Route::get('/{water}/edit', [WaterConsumptionController::class, 'edit'])->name('water.edit');
    Route::patch('/{water}/update', [WaterConsumptionController::class, 'index'])->name('water.update');
    Route::delete('/{water}/destroy', [WaterConsumptionController::class, 'destroy'])->name('water.destroy');
});
