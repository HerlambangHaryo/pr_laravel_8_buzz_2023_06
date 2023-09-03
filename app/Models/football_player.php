<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class football_player extends Model
{
    use HasFactory;

    public function squad()
    {
        return $this->belongsTo(Football_player_squad::class,'playerapi_id', 'playerapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
