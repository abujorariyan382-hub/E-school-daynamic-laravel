<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlinePage extends Model
{
     protected $fillable=[
        'title','sub_title','online_image'
    ];
}
