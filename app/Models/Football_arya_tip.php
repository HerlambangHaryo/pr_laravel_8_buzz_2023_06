<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Football_arya_tip extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'leagueapi_id',
        'season',
        'fixtureapi_id',
        'betapi_id',
        'value',
        'odd',
    ];

    public function fixture()
    {
        return $this->belongsTo(Football_fixture::class,'fixtureapi_id', 'fixtureapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }

    public function bet()
    {
        return $this->belongsTo(bets_old::class,'betapi_id', 'bet_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
