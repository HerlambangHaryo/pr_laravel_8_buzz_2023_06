<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api_football_player_analysis extends Model
{
    use HasFactory;

    protected $table = 'Api_football_player_analysis';

    public function player()
    {
        return $this->belongsTo(Football_player::class,'playerapi_id', 'playerapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
