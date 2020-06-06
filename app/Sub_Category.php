<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Category extends Model
{
    protected $table = 'sub_categories';

    protected $fillable = ['name','category_id'];

    public function Category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
