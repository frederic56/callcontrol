<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_file extends Model
{
    use HasFactory;
    protected $table = 'user_files';
    protected $primarykey = 'id';
    protected $fillable = ['file_id', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function file()
    {
        return $this->belongsTo(File::class);
    }
}
