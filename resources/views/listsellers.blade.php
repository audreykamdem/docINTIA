@extends('layout')
@section('contenu')
<center>
    <h2>Liste des Clients</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">E-Mail</th>
            </tr>
        </thead>
        @foreach($users as $user )
        <tbody>
            <tr>
                    @if($user->role=="utilisateur")
                <th scope="row"> Vendeur &nbsp; {{$user->id}}</th>                    
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>     
                    @endif      
            </tr>
        </tbody>
        @endforeach
    </table>

    {{$users->links()}}
</center>
@endsection
