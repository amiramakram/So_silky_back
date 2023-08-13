<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Add other fields here if needed
        'email',
        'phone_number',
        'emirate',
        'zone',
        'color_White',
        'color_black',
        'color_gray',
        'color_pink',
        'color_beige',
        'total_price',
    ];

    


}
    
