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
        'color_White' => 'nullable',
        'color_black' => 'nullable',
        'color_gray' => 'nullable',
        'color_pink' => 'nullable',
        'color_beige' => 'nullable',
        'total_price',
    ];

    


}
    
