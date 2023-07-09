<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutapp extends Model
{
    use HasFactory; 

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
        'ico',
        'theme',
        'mode',
        'color', 
        'domain', 
    ];
}
