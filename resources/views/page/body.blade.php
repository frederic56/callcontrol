@extends('base')

@section('content')
    <div class="body-container">
        @include('page.background')
        <div class="body-container-fluid">
            <div class="body-container">
                <h1> The Callcenter.com Difference</h1>
                <span>
                    <hr>
                </span>
                <div class="card-section">
                    @foreach ($articles as $article)
                        <div class="card-img">
                            <div class="card-body-img">
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
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        <div class="before-footer">
            <div class="before-footer-container">
                <div class="before-footer-left">
                    <h1>Contactez-Nous</h1>
                </div>
                <div class="before-footer-center"></div>
                <div class="before-footer-right">
                    <div class="nav-link">
                        <h4>Let's Improving your Business Today</h4>
                        <a class="before-footer-nav-link" href="#"> Contactez-nous
                            <iconify-icon class="before-icon" icon="material-symbols:arrow-right-alt-sharp"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

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
