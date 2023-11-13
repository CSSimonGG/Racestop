<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandprix extends Model
{
    use HasFactory;

    protected $fillable = ['country_id', 'grand_prix'];

    public function f1race()
    {
        return $this->hasMany(F1race::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
