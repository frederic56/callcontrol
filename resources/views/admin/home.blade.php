@extends('admin.layout')

@section('content')

        <div class="admin-home">
            <div id="col-md-8">
                Hello Admin!!
            </div>
        
            <div id="col-md-4">
                <li>
                    <a href="{{route('admin-register')}}">register</a>
                </li>
            </div>
        
            </div>
@endsection