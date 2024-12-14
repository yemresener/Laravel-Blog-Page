<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'main_title',
        'main_article',
        'low_title1',
        'low_article1',
        'low_title2',
        'low_article2',
        'low_title3',
        'low_article3',
        'low_title4',
        'low_article4',
        'home_image'
    ];
    public function get_category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
