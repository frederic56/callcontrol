<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primarykey = 'id';
    protected $fillable = ['titre_article', 'description', 'image_article'];
    // , 'user_id'
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
