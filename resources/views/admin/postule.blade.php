@extends('admin.layout')

@section('content')
    <div class="postule-admin">
        <table>
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
                </tr>
            </thead>
            <tbody>
                @if ($postules->count() > 0)
                    @foreach ($postules as $postule)    
                        <tr>
                            <td>{{$postule->id}}</td>
                            <td>{{$postule->name}}</td>
                            <td>{{$postule->email}}</td> 
                            <td>{{$postule->number}}</td> 
                            <td><a href="{{ $postule->user_cv}}" download="{{$postule->name.'_cv'}}">Download</a></td>                           
                            <td><a href="{{ $postule->user_cv}}" target="_blank">View</a></td>                           
                            <td><a href="/delete-postule/{{ $postule->id}}">Delete</a></td>                           
                        </tr>

                    @endforeach
                @endif
            </tbody>
        </table>

    </div>
@endsection