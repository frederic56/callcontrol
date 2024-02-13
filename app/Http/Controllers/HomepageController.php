<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use App\Models\Comments;
use App\Models\Postule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function logo()
    {
        $id  = 1;
        $img = Image::find($id);
        dd($img);
        //die();
        return view('page/header', [
            'items' => $img,
            'fav' => $img,
        ]);
        
    }

    public function showArticle()
    {
        return view('base', [
            'articles' => Article::all()
        ]);
    }

    public function a_propos()
    {
        $id = 1;
        $img = Image::find($id);
        return view('page/a_propos', [
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
    public function admin_home()
    {
        if (Auth::user()) {
            return view('admin.home');
        }else {
            return view('auth.login');
        }

    }
    public function admin_register()
    {
        if (Auth::user() != null) {
            return view('auth.register');
        }else {
            // return view('admin.home');
        }

    }
    
    public function admin_user_comments()
    {
        return view('admin.comments', [
            'comments' => Comments::all()
        ]);
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

    public function add_comment(Request $request)
    {
        Comments::create([
                "comments" => $request->comments
            ]);
        return redirect('/');
    }

}
