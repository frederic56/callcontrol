@extends('admin.layout')

@section('content')
    
    <div class="admin-view-article">
        <div class="admin-view-content">
            <a class="ad-insert" href="{{ route('insert-article') }}">Add article</a>

            <table class="table table-striped table-hover">
                <thead class="ad-thead">
                    <hr>
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
                <tbody class="ad-tbody">
                    @if ($articles->count() > 0)
                        @foreach ($articles as $article)    
                            <tr class="ad-tr">
                                <td>{{$article->id}}</td>
                                <td class="ad-titre-tbody">{{$article->titre_article}}</td>
                                <td>{{$article->description}}</td> 
                                <td>
                                    <a class="ad-edit" href="/update-article/{{ $article->id}}">
                                        <iconify-icon icon="basil:edit-outline" with="2em" height="2em"></iconify-icon>
                                    </a>
                            </td>                           
                                <td><a class="ad-delete" href="/delete-article/{{ $article->id}}">
                                    <iconify-icon icon="fluent:delete-32-regular" with="2em" height="2em"></iconify-icon>
                                </a></td>                           
                            </tr>

                        @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>

@endsection

