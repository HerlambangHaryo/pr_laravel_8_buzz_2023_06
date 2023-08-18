<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Football_player_squad extends Model
{
    use HasFactory;

    public function player()
    {
        return $this->belongsTo(Football_player::class,'playerapi_id', 'playerapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
