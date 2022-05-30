<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table = 'users1';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id','nom_usuario', 'fecha_nacimiento'];
}
