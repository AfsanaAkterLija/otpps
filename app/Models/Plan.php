<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $guarded =[];

    public function touristnamerelation()
    {
        return $this->belongsTo(User::class,'tourist_id','id');

    }

    public function locationnamerelation()
    {
        return $this->belongsTo(Location::class,'location_id','id');
        
    }

    public function transportnamerelation()
    {
        return $this->belongsTo(Transport::class,'transport_id','id');
        
    }
}
