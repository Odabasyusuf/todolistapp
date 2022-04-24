<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListHeading extends Model
{
    use HasFactory;

    public function getListContents(){
        return $this->hasMany('App\Models\ListContent', 'list_heading_id', 'id');
    }
}
