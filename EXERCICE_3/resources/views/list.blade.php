@extends('layouts.layout')

@section('title', 'Liste')

@section('content')
    <div class="main-list">
        <h3>Liste des inscrits</h3>

        <!--Message succes s'il y a un nouveau enregistrement-->
        @if (Session('status'))
        <div class="alert alert-success">
            {{ Session('status') }}
        </div>
        @endif

        <!--Tableau des inscrits-->
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Courriel</th>
              </tr>
            </thead>
            <tbody>
              @if(count($inscriptions))
                @foreach ($inscriptions as $inscription)
                <tr>
                    <td>{{$inscription->name}}</td>
                    <td>{{$inscription->email}}</td>
                </tr>
                @endforeach
              @else
                <tr>
                    <td colspan="2">Pas d'inscrit pour le moment.</td>
                </tr>
              @endif
            </tbody>
          </table>
          <!--Fin tableau-->

          <!-- Liende retour-->
          <p><a href="{{route('home')}}"> Retour au formulaire</a> </p>
    </div>
@endsection
