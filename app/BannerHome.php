<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BannerHome extends Model
{
    protected $table = 'banner_homes';

    protected $fillable = ['title','description','title_button','url'];


}
