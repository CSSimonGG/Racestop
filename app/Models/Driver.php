<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['active', 'name', 'driver_number', 'f1team_id', 'country_id', 'podiums', 'world_championship_points', 'grand_prix_entered', 'world_championships', 'highest_race_finish', 'highest_race_finish_times', 'pole_positions', 'fastest_laps', 'birth_date', 'birth_place', 'biography'];

    public function f1team()
    {
        return $this->belongsTo(F1team::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
