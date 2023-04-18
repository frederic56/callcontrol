@extends('base')

@section('content')
    <div class="container-fluid">
{{--
        <form action="/article" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Titre</label> <br>
            <input type="text" name="titre_article" id=""> <br>
            <label for="">Description</label> <br>
            <textarea name="description" id="" cols="0" rows="5"></textarea> <br>
            <input type="file" name="image_article" id="">
            <input type="submit" value="enregistrer">
        </form>
--}}
{{--    <form action="/logo" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">icon</label> <br>
            <input type="file" name="logo" id=""> <br>
            <input type="submit" value="enregistrer">
        </form>
--}}  
        <div class="h1">
            <h1> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, repellendus! </h1> 
        </div>
        <div class="h4">
            <h4>Callcenter.com will help Reduce your. <br>
                Lorem ipsum dolor sit amet.
            </h4>
            <div class="btn">
                <button class="btn-contact" type="button">
                    Contactez-nous
                    <iconify-icon icon="ep:message"></iconify-icon>
                </button>
            </div>
        </div>
    

        <div class="container">
            <h1> Lorem ipsum dolor sit amet. </h1>
            <span>
                <hr>
            </span>
            <div class="card-section">
                <div class="card">
                    @foreach ($articles as $article)
                        <div class="card-body">
                            <div class="img-fluid">
                                <figure>
                                    <img src="{{ $article->image_article }}" alt="" sizes="" srcset="">
                                </figure>
                            </div>
                            <div class="card-content">
                                <h3>{{ $article->titre_article }}</h3>
                                <p>{{ $article->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    
        <div class="before-footer">
            <div class="contactez-nous">
                <h1>Contactez-Nous</h1>
                <h4>Let's Improving your Business Today</h4>
                <div class="nav-link">
                    <a href="#">Contactez-nous
                        <iconify-icon icon="material-symbols:arrow-right-alt-sharp"></iconify-icon>
                    </a>
                </div>
            </div>
            <hr>
            <div class="social-network">
                <h1>Réseaux Sociaux</h1>
                <hr>
                <div class="icons-social-network">
                    <iconify-icon icon="logos:facebook"></iconify-icon>  
                    <iconify-icon icon="skill-icons:instagram"></iconify-icon>                    <iconify-icon icon="skill-icons:twitter"></iconify-icon>                    
                    <iconify-icon icon="logos:google-icon"></iconify-icon>                </div>
            </div>
        </div>
    </div>
    
    @endsection
