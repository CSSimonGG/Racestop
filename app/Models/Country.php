<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'flag_path'];

    public function driver()
    {
        return $this->hasMany(Driver::class);
    }

    public function f1team()
    {
        return $this->hasMany(F1team::class);
    }

    public function grandprix()
    {
        return $this->hasMany(Grandprix::class);
    }
}
