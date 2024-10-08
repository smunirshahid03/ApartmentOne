<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
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
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

      public function media(){
        return $this->hasMany(Media::class);
    }

    public function pets(){
        return $this->hasMany(PetDetails::class, 'id');
    }
    public function features()
    {
        return $this->hasMany(FeatureDetails::class);
    }
}
