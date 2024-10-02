<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentToWho extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
}
