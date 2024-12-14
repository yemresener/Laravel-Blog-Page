<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function get_posts(){
        return $this->hasMany(post::class);
    }
   
}
