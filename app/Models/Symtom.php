<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symtom extends Model
{
    protected $table = 'symtoms';
    protected $guarded = [];
    use HasFactory;
    public function deseases(){
        return $this->belongsToMany(Desease::class,'desease_symtoms','symtoms_id','desease_id');
    }

    public function users(){
        return $this->belongsToMany(User::class,'users_symtoms','symtoms_id','users_id');
    }
}
