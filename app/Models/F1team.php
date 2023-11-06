<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class F1team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'logo_path', 'team_hex_color', 'country_id', 'team_chief', 'power_unit', 'world_championships', 'world_championship_points',  'highest_race_finish', 'highest_race_finish_times', 'podiums', 'pole_positions', 'fastest_laps', 'information'];

    public function driver()
    {
        return $this->hasMany(Driver::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
