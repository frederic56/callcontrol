@extends('admin.layout')

@section('content')
    <div class="offre">
        <div class="mes_offre">
            Afficher les offre disponible
        </div>
        <div class="insert_offre">
            <a href="{{ route('insert_offre')}}" class="btn btn-primary">Ajouter un offre</a>
        </div>
    </div>
@endsection