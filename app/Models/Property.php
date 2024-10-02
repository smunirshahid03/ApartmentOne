<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'cat_id',
        'credit_point',
        'rent',
        'other_details',
        'available_status',
        'price_rent',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
