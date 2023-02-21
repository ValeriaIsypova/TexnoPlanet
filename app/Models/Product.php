<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Cart(){
        return $this -> belongsTo(cart::class, 'product_id', 'id');
    }

    public function Category(){
        return $this -> belongsTo(cart::class, 'id', 'id_cat');
    }
}
