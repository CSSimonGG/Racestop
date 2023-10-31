<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandprix extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'grand_prix', 'flag'];

    public function f1race()
    {
        return $this->hasMany(F1race::class);
    }
}
