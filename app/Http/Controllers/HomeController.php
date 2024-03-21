<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Postule;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index( Request $request)
    {
        dd($request);

        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('/home');
            }else if($usertype == 'admin'){
                return view('admin.home');
            }else{
                return redirect()->back();
            }
        }

        
    }

    public function view_article()
    {
        $article = Article::orderBy('id', 'desc')->get();
        return view('admin.view_article' , ['articles' => $article]);
    }

    public function insert_article()
    {
        return view('admin.insert_article');
    }

    public function add_article(Request $request)
    {
        $request->validate([
            'titre_article' => 'required', 
            'description' => 'required',
            'image_article' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        // $requestData = $request->all();
        $imageName = time().'_'.$request->file('image_article')->getClientOriginalName();
        $path = $request->file('image_article')->storeAs('images', $imageName, 'public');
        $image_article = '/storage/'.$path;

        // Article::create($requestData ['user_id'] = Auth::user()->id);
        // dump(Auth::user()->id);
        // die();

        Article::create([
            "titre_article"=>$request->titre_article,
            "description"=>$request->description,
            "image_article"=>$image_article,
            "user_id"=> Auth::user()->id,
        ]);
        return redirect('/view-article');
    }

    public function delete_article($id)
    {
        DB::delete('delete from articles where id = ?', [$id]);
        return redirect('/view-article')->with('success', 'Article deleted');
    }

    public function update_article($id)
    {
        $article = Article::findOrFail($id);
       // DB::update('update from articles where id = ?', [$id]);
        //return redirect('/view-article')->with('success', 'Article updated');
        return view('admin.update_article', ['article' => $article]);
    }
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'titre_article'=> 'required',
                'description'=> 'required'
            ]);

            $article = Article::findOrFail($id);
            $article ->titre_article = $request->get('titre_article');
            $article ->description = $request->get('description');
            $img = $request->file('image_article');
            // dump($img);
            // die();
            if ($img!= null) {
                //mamafa



                //mampiditra
                $imageName = time().'_'.$request->file('image_article')->getClientOriginalName();
                $path = $request->file('image_article')->storeAs('images', $imageName, 'public');
                $image_article = '/storage/'.$path;
                $article->image_article = $image_article; 
            }

            $article->update();
        return redirect('/view-article')->with('success', 'Article updated');
    }

    public function admin_candidate()
    {
        $candidate = Postule::orderBy('id', 'desc')->get();
        return view('admin.candidate', ['candidates' => $candidate]);
    }


}
