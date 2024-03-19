<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;
    protected $table = 'offres';
    protected $primarykey = 'id';
    protected $fillable = ['titre', 'description', 'mission', 'profil', 'salaire'];
}
