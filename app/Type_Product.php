<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Product extends Model
{
    protected $table = 'type_products';

    protected $fillable = ['product_id','type_sizes_id','name'];

    public function Product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public function Type_Size()
    {
        return $this->belongsTo('App\Type_Size', 'type_sizes_id');
    }

}
