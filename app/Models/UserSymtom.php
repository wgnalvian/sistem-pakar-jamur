<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSymtom extends Model
{
    use HasFactory;
    protected $table = 'users_symtoms';
    protected $guarded = [];

    public function symtom(){
        return $this->hasOne(Symtom::class,"id","symtoms_id");
    }
}
