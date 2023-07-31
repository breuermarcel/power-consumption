<?php

namespace Breuermarcel\PowerConsumption\Models;

use Breuermarcel\PowerConsumption\Scopes\AuthUserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class WaterConsumption extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = "bm_water_consumptions";

    protected $fillable = ["user_id", "value", "timestamp"];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new AuthUserScope);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
