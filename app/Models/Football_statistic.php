<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Football_odd;  
use App\Models\Football_coach;  

use Awobaz\Compoships\Compoships;

class Football_statistic extends Model
{
    use HasFactory;
    use Compoships;

    public function coach_home()
    {         
        return $this->belongsTo(Football_coach::class,'lineups_coach_homeapi_id', 'coachapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function coach_away()
    {         
        return $this->belongsTo(Football_coach::class,'lineups_coach_awayapi_id', 'coachapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
