<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desease extends Model
{
    use HasFactory;
    protected $table = 'desease';
    protected $guarded = [];

    public function symtoms(){
        return $this->belongsToMany(Symtom::class,'desease_symtoms','desease_id','symtoms_id');
    }

}
