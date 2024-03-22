<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\candidature_files;
use App\Models\user_file;

class File extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'size', 'path'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function user_file()
    {
        return $this->hasMany(user_file::class);
    }

    /**
     * Relation ManyToMany
     * Between candidature and File
     * Pivot candidature_file
     */
    public function candidature()
    {
        return $this->belongsToMany(Candidature::class);
    }

    public function candidature_files()
    {
        return $this->hasMany(candidature_files::class);
    }
}
