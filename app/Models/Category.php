<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "category";

    protected $fillable = [
        'id',
        'category_name',
        'created_at',
        'updated_at'
    ];

    public function Product(){
        return $this -> belongsTo(Product::class, 'id', 'id_cat');
    }

}