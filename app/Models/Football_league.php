<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Country;

class Football_league extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'country_name',
        'leagueapi_id',
        'name',
        'type',
        'logo',
        'tier'
    ];

    public function country()
    {
        return $this->belongsTo(Country::class,'country_name', 'name')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
