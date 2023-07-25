<?php

namespace Breuermarcel\PowerConsumption\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaterConsumption extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "bm_water_consumptions";

    protected $fillable = ["value", "timestamp"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
