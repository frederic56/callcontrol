@extends('base')

@section('content')
    <div class="user-postule">
        @if ($errors->any())
        @foreach ($errors->all() as $error)
            <span> {{$error}} </span>
        @endforeach
    @endif
        <form action="{{ route('insert-postuler') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="postule-field">
                <label for="">Nom</label>
                <input type="text" name="name" placeholder="Entrer votre nom">
            </div>
            <div class="postule-field">
                <label for="">E-mail</label>
                <input type="email" name="email" placeholder="Entrer votre E-mail">
            </div>
            <div class="postule-field">
                <label for="">Votre numéro</label>
                <input type="text" name="number" placeholder="Votre numéro">
            </div>
            <div class="postule-field">
                <label for="">CV</label>
                <input type="file" name="user_cv">
            </div>
            <button type="submit">Envoyer</button>
        </form>
        
    </div>
@endsection