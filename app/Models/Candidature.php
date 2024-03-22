<?php

namespace App\Models;

use App\Models\User;
use App\Models\Offre;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Candidature extends Model
{
    use HasFactory;
    protected $table = 'candidatures';
    protected $primarykey = 'id';
    protected $fillable = ['offre_id', 'user_id', 'cv', 'complement_dossier','introduction','pretention_salariale'];



    public function offre()
    {
        return $this->belongsTo(Offre::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    
    /**
     * Relation ManyToMany
     * Between Candidature and File
     * Pivot candidature_file
     */
    
    public function file()
    {
        return $this->belongsToMany(File::class);
    }
    public function candidature_files()
    {
        return $this->hasMany(candidature_files::class);
    }


}
