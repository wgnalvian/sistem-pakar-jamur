<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeseaseSymtom extends Model
{
    use HasFactory;
    protected $table = 'desease_symtoms';
    protected $guarded = [];
    
    public function symtom(){
        return $this->hasOne(Symtom::class,'id','symtoms_id');
    }

    public function desease(){
        return $this->belongsTo(Desease::class,'desease_id','id');
    }
}
