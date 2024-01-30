@extends('admin.layout')

@section('content')
<div class="admin-update">
    <div class="admin-update-content">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <span> {{$error}} </span>
            @endforeach
        @endif
        <form action="{{ route('update',$article->id)}}" method="post" enctype="multipart/form-data" id="updateform">
            @csrf
            @method('PUT')
            <div class="update-field">
                <label for="">Titre</label>
                <input type="text" name="titre_article" id="" value="{{$article->titre_article}}">
            </div>
            <div class="update-field">
                <label for="">Description</label>
                <textarea name="description" id="" cols="50" rows="5">{{$article->description}}</textarea>
            </div>
            <div class="update-field">
                <label for="image_article">Image</label>
                <input type="file" name="image_article" id="">
            </div>
            <button type="submit" class="update-btn">update</button>
            <button type="close" class="btn btn-close"></button>
        </form>
    </div>
</div>
@endsection