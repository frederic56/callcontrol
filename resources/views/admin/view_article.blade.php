@extends('admin.layout')

@section('content')
    
    <div class="admin-view-article">
        <div class="admin-view-content">
            <a href="{{ route('insert-article') }}">Add article</a>

            <table>
                <thead>
                    <tr>
                        <th>
                            id
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Description
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)    
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->titre_article}}</td>
                                <td>{{$article->description}}</td> 
                                <td><a href="/update-article/{{ $article->id}}">Update</a></td>                           
                                <td><a href="/delete-article/{{ $article->id}}">Delete</a></td>                           
                            </tr>

                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>

@endsection