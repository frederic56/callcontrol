<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postule extends Model
{
    use HasFactory;
    protected $table = 'postules';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'email', 'number', 'user_cv'];
}
