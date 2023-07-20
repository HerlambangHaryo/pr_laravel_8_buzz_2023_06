<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Awobaz\Compoships\Compoships;

class football_pattern_from extends Model
{
    use HasFactory;
    use Compoships;
 
    protected $table = 'football_pattern_from';
}
