<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class research_on_anytime_goal_scorer extends Model
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

    public function event()
    {
        return $this->hasMany(Football_event::class,'fixtureapi_id', 'fixtureapi_id')
                    ->where('type', '=', 'Goal')
                    ->orderby('time_elapsed');
    }

    public function arya()
    {
        return $this->belongsTo(football_arya_tip::class,'fixtureapi_id', 'fixtureapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

}
