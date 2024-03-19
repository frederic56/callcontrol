@extends('layouts.app')
@section('content')
    
    <div class="col-md-4"></div>
    <div class="col-md-8">
        @foreach ($offres as $offre)
        <div class="card">
            {{-- <div class="card-header">Header</div> --}}
            <div class="card-body">
                {{-- <img src="../bg/model-1.JPG" alt="" sizes="" srcset="" style="width: 200px; height:auto"> --}}
                <h1>{{ $offre->titre }}</h1>
                <p>
                    {{ $offre->description }}
                </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('postule_user')}}" class="btn btn-primary">Postuler</a>
                </div>
            </div>
            @endforeach

    </div>

@endsection