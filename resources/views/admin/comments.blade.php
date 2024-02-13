@extends('admin.layout')

@section('content')
    <div class="ad-commpent">
        @foreach ($comments as $comment)
            <h3>
                {{$comment->comments}}
            </h3>
        @endforeach

    </div>
 
@endsection