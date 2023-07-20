<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\Football_venue;  

class Football_team extends Model
{
    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'country',
        'founded',
        'logo', 
    ];

    public function venue()
    {         
        return $this->belongsTo(Football_venue::class,'venueapi_id', 'venueapi_id')
                ->withDefault([
                    'nama' => '',
                ]);
    }
}
