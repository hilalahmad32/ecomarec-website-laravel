<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Relationship;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $table='categories';
    protected $fillable=[
        'category_name',
        'image',
        'status',
        'slug'
    ];


    public function product() 
    {
        return $this->hasMany(Product::class);
    }

    public function sub_category() 
    {
        return $this->hasMany(SubCategory::class);
    }
    // public function getImageAttribute($value) 
    // {
    //     return url('/')."/storage/".$value;
    // }
}
