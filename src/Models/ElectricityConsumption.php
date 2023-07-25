<?php

namespace Breuermarcel\PowerConsumption\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectricityConsumption extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "bm_electricity_consumptions";

    protected $fillable = ["value", "timestamp"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
