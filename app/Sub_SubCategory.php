<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_SubCategory extends Model
{
    protected $table = 'sub_subcategories';

    protected $fillable = ['name','sub_category_id'];

    
    public function Sub_Category()
    {
        return $this->belongsTo('App\Sub_Category', 'sub_category_id');
    }


}
