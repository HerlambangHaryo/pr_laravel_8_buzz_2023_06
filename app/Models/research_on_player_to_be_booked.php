<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class research_on_player_to_be_booked extends Model
{
    use HasFactory;

    public function fixture()
    {
        return $this->belongsTo(Football_fixture::class,'fixtureapi_id', 'fixtureapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function player()
    {
        return $this->belongsTo(Football_player::class,'value', 'name')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    protected $table = 'research_on_player_to_be_booked';
}
