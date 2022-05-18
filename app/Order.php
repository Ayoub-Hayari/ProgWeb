<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'user_id','paiement_firstname',
        'paiement_name','paiement_phone', 
        'paiement_email', 'paiement_adress', 
        'paiement_city','paiement_postalcode', "paiement_total"
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }

}



