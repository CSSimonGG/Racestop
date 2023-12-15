<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class F1race extends Model
{
    use HasFactory;

    protected $fillable = ['grandprix_id', 'circuit', 'circuit_image', 'first_gp', 'laps', 'circuit_length', 'race_distance', 'lap_record', 'lap_record_holder_driver_id', 'lap_record_year', 'last_winner_driver_id', 'start_date', 'end_date', 'information'];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function grandprix()
    {
        return $this->belongsTo(Grandprix::class);
    }
}
