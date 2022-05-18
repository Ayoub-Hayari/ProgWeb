<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Voyager Relationship
    public function categoryId()
    {
        return $this->belongsTo('App\Category');
    }

    // get produit
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
