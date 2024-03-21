<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\candidature_files;

class File extends Model
{
    use HasFactory;
    protected $table = 'files';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'size', 'path'];

    public function user_files()
    {
        return $this->hasMany(user_file::class, 'file_id');
    }
    public function candidature()
    {
        return $this->hasMany(candidature_files::class, 'id_files');
    }
}
