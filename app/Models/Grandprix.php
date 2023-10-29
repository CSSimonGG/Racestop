<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandprix extends Model
{
    protected $fillable = ['country', 'grand_prix', 'flag'];

    use HasFactory;
}
