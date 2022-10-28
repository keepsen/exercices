@extends('layouts.layout')

@section('title', 'Inscription')

@section('content')
    <div class="main-form">
        <h3>Formulaire d'inscription</h3>
        <!-- Affiche des messages d'erreur s'il y en a-->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Formulaire -->
        <form method="POST" action="{{route('store')}}">
            @csrf
            <div class="form-group">
                <label for="title">Votre nom</label>
                <input id="title" type="text" name="name" class="form-control" placeholder="Nom" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
            <label for="email">Votre courriel </label>
            <input  type="text" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button>
        </form>
    </div>
@endsection
