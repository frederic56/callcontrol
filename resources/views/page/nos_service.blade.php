@extends('base')

@section('content')

<h1>Nos service</h1>
<div class="card-section-ns">
    @foreach ($articles as $article)
        <div class="card ar-ns">
            <div class="card-body">
                <img src="{{$article->image_article}}" alt="" srcset="" style="width: 200px;" class="img-ar">
                <h3 class="card-title">{{$article->titre_article}}</h3>
                <p class="card-text">{{$article->description}}</p>
            </div>
        </div>
    @endforeach

</div>

@endsection