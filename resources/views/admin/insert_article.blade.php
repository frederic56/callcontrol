@extends('admin.layout')

@section('content')
    <div class="admin-insert">
        <div class="admin-insert-content">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <span> {{$error}} </span>
                @endforeach
            @endif
            <form action="{{ route('add-article') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="insert-field">
                    <label for="">Titre</label>
                    <input type="text" name="titre_article" id="">
                </div>
                <div class="insert-field">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="50" rows="5"></textarea>
                </div>
                <div class="insert-field">
                    <label for="image_article">Image</label>
                    <input type="file" name="image_article" id="">
                </div>
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
@endsection