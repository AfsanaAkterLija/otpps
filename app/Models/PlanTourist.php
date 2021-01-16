<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlanTourist extends Model
{
    protected $guarded =[];

    public function touristnamerelation()
    {
        return $this->belongsTo(User::class,'tourist_id','id');
    }

    public function plan()
    {
    return $this->hasOne(Plan::class,'id','plan_id');
    }
   
    
}
