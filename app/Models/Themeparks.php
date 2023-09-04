<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Themeparks extends Model
{
    public $table = 'themeparks';
    
    protected $fillable = [
        'park_name',
        'park_details',
        'park_price',
    ];
}
