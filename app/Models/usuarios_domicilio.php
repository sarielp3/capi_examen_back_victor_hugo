<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios_domicilio extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'torneos';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id', 'domicilio','numero_exterior','colonia','cp','ciudad'];
}
