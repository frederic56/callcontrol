@extends('base')

@section('content')
    <div class="container-fluid">
        
        <div class="h1">
            <h1>
                SOLUTIONS FOR YOUR BUSINESS.</h1> 
        </div>
        <div class="h4">
            <h4>Callcenter.com will help Reduce your.</h4>
            <div class="btn">
                <button class="btn-contact" type="button">
                    Contactez-nous
                    <iconify-icon icon="ep:message"></iconify-icon>
                </button>
            </div>
        </div>
    
    
        <div class="container">
            <h1>Grand Titre </h1>
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
    
            <div class="social-network">
                <h1>Réseaux Sociaux</h1>
                <hr>
                <div class="icons-social-network">
                    <iconify-icon icon="uil:facebook" width="30"></iconify-icon>
                    <iconify-icon icon="ri:instagram-fill" width="30"></iconify-icon>
                    <iconify-icon icon="fa6-brands:square-twitter" width="26"></iconify-icon>
                    <iconify-icon icon="mdi:google-plus" width="32"></iconify-icon>
                </div>
            </div>
        </div>
    </div>
    @endsection
