<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use App\Models\Postule;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $id  = 1;
        $img = Image::find($id);
        return view('page/body', [
            'items' => $img,
            'fav' => $img,
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
        $id = 1;
        $img = Image::find($id);
        return view('page/accueil', [
            'fav' => $img,
            'items' => $img
        ]);
    }

    public function nos_service(){
        $id = 1;
        $img = Image::find($id);
        $article = Article::all();
        return view('page/nos_service', [
            'fav' => $img,
            'items' => $img,
            'articles' => Article::all()
        ]);
    }

    public function postule_user()
    {
        return view('page.postule_user');
    }

    public function insert_postule( Request $request)
    {
        $request->validate([
            'name' => 'required', 
            'email' => 'required',
            'number' => 'required',
            'user_cv' => 'required'
        ]);
        $pdfname = time().'_'.$request->file('user_cv')->getClientOriginalName();
        $path = $request->file('user_cv')->storeAs('document', $pdfname, 'public');
        $pdf_user = '/storage/'.$path;

        // Article::create($requestData ['user_id'] = Auth::user()->id);
        // dump(Auth::user()->id);
        // die();

        Postule::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "number"=> $request->number,
            "user_cv" => $pdf_user,
            // "user_id" => Auth::user()->id,
        ]);
        return redirect('/postuler-user');
    }
}
