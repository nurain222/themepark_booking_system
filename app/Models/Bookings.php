<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Themeparks;
use App\Models\User;

class Bookings extends Model
{
    public $table = 'bookings';
    
    protected $fillable = [
        'cust_id',
        'park_id',
        'quantity',
        'date',
        'total_price',
    ];

    public function customer(){  
        
        //return the function->('model of orginal table', 'FK in the mix table')
        return $this->belongsTo('App\Models\User', 'cust_id');
    }

    public function themepark(){

        //return $this->belongsTo(Themeparks::class);
        return $this->belongsTo('App\Models\Themeparks', 'park_id');
    }

}
