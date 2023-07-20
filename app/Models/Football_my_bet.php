<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Football_my_bet extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'investment',
        'leagueapi_id',
        'season',
        'fixtureapi_id',
        'betsapi_id',
        'value', 
        'odd', 
        'investment'
    ];
}
