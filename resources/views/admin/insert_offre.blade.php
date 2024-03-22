@extends('admin.layout')

@section('content')
{{-- <h1>Candiata</h1> --}}
<div class="container-user">
    <div class="col-md-4">
        
    </div>
    <div class="col-md-8 insert-users">
        <h3>ESPACE RESERVER AU CANDIDATES</h3>
        <form action="{{ route('add-offre')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="insert-user">
                <label for="">Titre de l'offre</label>
                <input type="text" name="title" id="" class="form-control">
            </div>
            <div class="insert-user">
                <label for="">Description de l'offre</label>
                <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <div class="insert-user">
                <label for="">Reference</label>
                <input type="text" name="reference" id="" class="form-control">
            </div>
            <div class="insert-user">
                <label for="fourchette_salariale">Fourchette Salariale</label>
                <input type="text" name="fourchette_salariale" id="" class="form-control">
            </div>
            <div class="">
                <label for="">Delai de l'offre</label>
                <input type="date" name="date_validite" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
        </form>
    </div>
</div>
@endsection

