<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Football_set_eye extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'football_fixture_id',
        'leagueapi_id',
        'season',
        'fixtureapi_id',
        'status',
    ];
}
