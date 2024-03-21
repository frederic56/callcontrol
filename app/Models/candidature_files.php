<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\File;
use App\Models\Candidature;

class candidature_files extends Model
{
    use HasFactory;
    protected $table = 'candidature_files';
    protected $primarykey = 'id';
    protected $fillable = ['id_files', 'id_candidatures'];

    public function file()
    {
        return $this->belongsTo(File::class);
    }

    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }
}
