<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Article;
use App\Models\Candidature;
use App\Models\Comments;
use App\Models\Offre;
use App\Models\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    
    public function index(Request $request)
    {
        dd($request);
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

    public function blog()
    {
        $id = 1;
        $img = Image::find($id);
        return view('page/a_propos', [
            'fav' => $img,
            'items' => $img
        ]);
    }

    public function services(){
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
        if (Auth::user() == null ) {

            return view('page.inscription');
        }else{
            return view('page.postule_user');
        }
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

        Candidature::create([
            "name"=> $request->name,
            "email"=> $request->email,
            "number"=> $request->number,
            "user_cv" => $pdf_user,
            // "user_id" => Auth::user()->id,
        ]);
        return redirect('/show-offre');
    }

    // public function recrutement()
    // {
    //     return view('page.recrutement');
    // }

    public function offre()
    {
        return view('admin.offre');
    }

  
    public function add_offre(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255']
        ]);

        Offre::create([
            'title' => $request->title,
            'description' => $request->description,
            'reference' => $request->reference,
            'fourchette_salariale' => $request->fourchette_salariale,
            'date_validite' => $request->date_validite
        ]);
        //dd($request);
        return redirect('/offre');
    }

    public function show_offre()
    {
        $offres = Offre::all();
        return view('page.recrutement', [
            'offres' => $offres
        ]);
    }

    public function insert_offre()
    {
        return view('admin.insert_offre');
    }

    public function add_comment(Request $request)
    {
        Comments::create([
                "comments" => $request->comments
            ]);
        return redirect('/');
    }

    public function userChart()
    {
        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();

        $labels = [];
        $data = [];
        $colors = ['#FF6384', '#36A2EB', '#FFCE56', '#88C34A', '#FF5722', '#09688', '#795548', '#9C27B0', '#2196F3', '#FF9800', '#CDDC39', '#607D8B'];

        for ($i=1; $i < 12; $i++){
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;

            foreach ($users as $user) {
                if($user->month == $i){
                    $count = $user->count;
                    break;

                }
            }

            array_push($labels, $month);
            array_push($data, $count);

        }

        $datasets = 
        [

            [
                'label' => 'Users',
                'data' =>$data,
                'backgroundcolor' => $colors
            ]
        ];
        // dd()
        return view('admin.home', compact('datasets', 'labels'));
    }

}
