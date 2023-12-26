<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsHarvestCondition extends Model
{
    use HasFactory;
    protected $table = 'isharvest_condition';
    protected $guarded = [];

    public function isharvest(){
        return $this->belongsTo(IsHarvest::class,'isharvest_id','id');
    }

    public function condition(){
        return $this->belongsTo(Condition::class,'condition_id','id');
    }
}
