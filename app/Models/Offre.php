<?php

namespace App\Models;

use App\Models\Candidature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offre extends Model
{
    use HasFactory;
    protected $table = 'offres';
    protected $primarykey = 'id';
    protected $fillable = ['title', 'description', 'reference', 'fouchette_salariale', 'date_validité'];

    public function candidature()
    {
        return $this->hasMany(Candidature::class, 'offre_id');
    }
}

