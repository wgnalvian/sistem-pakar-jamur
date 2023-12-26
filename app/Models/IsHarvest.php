<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsHarvest extends Model
{
    use HasFactory;
    protected $table = 'isharvest';
    protected $guarded = [];

    public function condition(){
        return $this->belongsToMany(Condition::class,'isharvest_condition','isharvest_id','condition_id');
    }
}
