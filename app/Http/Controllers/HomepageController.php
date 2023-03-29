<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $id1  = 1;
        $id2  = 5;
        $img = Image::find($id1);
        $fav = Image::find($id2);
        return view('page/body', [
            'items' => $img,
            'fav' => $fav,
            'articles' => Article::all()      
        ]);
        
    }

    public function showArticle()
    {
        return view('base', [
            'articles' => Article::all()
        ]);
    }

    public function accueil()
    {
        $id = 5;
        $id_1 = 1;

        $fav = Image::find($id);
        $img = Image::find($id_1);
        return view('page/accueil', [
            'fav' => $fav,
            'items' => $img
        ]);
    }
}
