@extends('layouts.app', ['title' => 'Demander un devis'])
@section('content')
    <h1>Demander un devis</h1>
    <form>
        <input type="text" placeholder="Votre nom"> <br><br>
        <input type="text" placeholder="Votre prenoms"><br><br>
        <textarea type="text" placeholder="Description du projet"></textarea>
    </form>

@endsection
