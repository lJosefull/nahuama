<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Size extends Model
{
    protected $table = 'type_sizes';

    protected $fillable = ['size','name'];

    public function Type_Product()
    {
        return $this->hasMany('App\Type_Product');
    }
}
