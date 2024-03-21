@extends('admin.layout')

@section('content')
<div class="container-fluid">
    @include('auth.register')

</div>
    {{-- <div class="container-fluid admin mt-2 " >
        <form action="" method="post">
            <label for="name">name</label>
            <input type="text" name="name" placeholder="your name">
            <label for="name">email</label>
            <input type="email" name="email" id="">
            <label for="name">password</label>
            <input type="password" name="password" id="">
            <button type="submit">Sign up</button>
        </form>

    </div> --}}

@endsection