<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = ['name','color'];

    public function Product()
    {
        return $this->hasMany('App\Product');
    }

    public function Sub_Category()
    {
        return $this->hasMany('App\Sub_Category');
    }

    public function Sub_SubCategory()
    {
        return $this->hasMany('App\Sub_SubCategory');
    }
    
}
