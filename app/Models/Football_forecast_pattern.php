<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Football_league;   
use Awobaz\Compoships\Compoships;

class Football_forecast_pattern extends Model
{
    use HasFactory;
    use Compoships;
 
    protected $table = 'Football_forecast_pattern';
 
    public function league()
    {         
        return $this->belongsTo(Football_league::class,'leagueapi_id', 'leagueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
