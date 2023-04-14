<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Image;
use Illuminate\Http\Request;

class ImagesController extends Controller
{
    
    public function index( Request $request)
    {
        //dd($request);
        $request->validate(['logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        $imageName = time().'_'.$request->file('logo')->getClientOriginalName();
        $path = $request->file('logo')->storeAs('images', $imageName, 'public');

        $requestData["logo"] = '/storage/'.$path;
        //Ajoute d'user connecté avec les donnés qui vient de champ formulaire pour qu'on ajouter sur le Model Article
       // $data = $requestData + ["user_id" => $user_connected];
        Image::create($requestData);
        return redirect('/');
    }

    /**
     * @param $request pour recupérer les donnés du champs de formulaire
     * @return array dans la class Article
     */
    public function article(Request $request)
    {
        $requestData = $request->all();

        $request->validate(['image_article' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048']);
        $imageName = time().'_'.$request->file('image_article')->getClientOriginalName();
        $path = $request->file('image_article')->storeAs('images_articles', $imageName, 'public');
        $requestData["image_article"] = '/storage/'.$path;

        Article::create($requestData);
        return redirect('/');
    }

}
