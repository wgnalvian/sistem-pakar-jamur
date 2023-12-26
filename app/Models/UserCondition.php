<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCondition extends Model
{
    use HasFactory;
    protected $table = 'users_condition';
    protected $guarded = [];
}
