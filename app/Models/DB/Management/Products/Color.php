<?php

namespace App\Models\DB\Management\Products;

use App\Models\DB\DBModel;
use App\Vendor\Locale\Models\Locale;

use App;
use App\Models\DB\Management\Products\Shirt\ShirtColor;

class Color extends DBModel
{

    protected $table = 't_colors';

    public function shirts()
    {
        return $this->hasMany(ShirtColor::class, 'color_id');
    }
    
    public function locale()
    {
        return $this->hasMany(Locale::class, 'key')->where('rel_parent', 'colors')->where('language', App::getLocale());
    }
} 