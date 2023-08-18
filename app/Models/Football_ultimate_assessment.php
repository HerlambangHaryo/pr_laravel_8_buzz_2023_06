<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Football_ultimate_assessment extends Model
{
    use HasFactory;

    public function league()
    {
        return $this->belongsTo(Football_league::class,'leagueapi_id', 'leagueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
