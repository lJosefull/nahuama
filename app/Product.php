<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * Modelo de Producto
    */
    protected $table = 'products';
    protected $fillable = [
        'new',  
        'name',
        'price',
        'stock',
        'details',
        'discount',
        'count_shop',
        'category_id',
        'description',
        'sub_category_id'
    ];
    /**
     * Relacion con el modelo Category.
     */
    public function Category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function Sub_Category()
    {
        return $this->belongsTo('App\Sub_Category', 'sub_category_id');
    }



    public function Type_Product()
    {
        return $this->hasMany('App\Type_Product');
    }

    public $timestamps = true;
}