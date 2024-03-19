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
                <input type="text" name="titre" id="">
            </div>
            <div class="insert-user">
                <label for="">Description de l'offre</label>
                <textarea name="description" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="insert-user">
                <label for="">Mision</label>
                <textarea name="mission" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="insert-user">
                <label for="profil">Profil requis</label>
                <textarea name="profil" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="offre_salary">
                <label for="">Salaire</label>
                <select name="salaire" id="">...
                    <option value="1">Moins de 1M Ar </option>
                    <option value="2">Plus de 1M Ar </option>
                    <option value="3">Personaliser </option>
                    <option value="4">Pretension Salariale </option>

                </select>

            </div>
            <button type="submit">Ajouter</button>
        </form>
    </div>
</div>
@endsection