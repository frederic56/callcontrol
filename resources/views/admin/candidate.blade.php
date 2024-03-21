@extends('admin.layout')

@section('content')
    <div class="postule-admin">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>
                        id
                    </th>
                    <th>
                        Name
                    </th>
                    <th>
                        E-mail
                    </th>
                    <th>
                        Number
                    </th>
                    <th>
                        Action
                    </th>
                    <th>
                        Titre de l'offre
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($candidates->count() > 0)
                    @foreach ($candidates as $candidate)    
                        <tr>
                            <td>{{$candidate->id}}</td>
                            <td>{{$candidate->name}}</td>
                            <td>{{$candidate->email}}</td> 
                            <td>{{$candidate->number}}</td> 
                            <td><a href="{{ $candidate->user_cv}}" target="_blank">View</a></td>                           
                            <td>
                                <a href="{{ $candidate->user_cv}}" download="{{$candidate->name.'_cv'}}">
                                    <iconify-icon icon="material-symbols-light:download" with="1.3em" height="1.3em"></iconify-icon> 
                                </a>
                            </td>     
                            <td>
                                <a href="/delete-postule/{{ $candidate->id}}">
                                    <iconify-icon icon="fluent:delete-32-regular" with="1.5em" height="1.5em"></iconify-icon>
                                </a>
                        </td>  
                        <td>
                            {{ $candidate->offre->titre }}
                        </td>                         
                        </tr>

                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@endsection