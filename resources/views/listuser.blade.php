@extends('layout')
@section('contenu')
<center>
    <h2>Liste des Utilisateurs</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">E-Mail</th>
                <th scope="col">Role</th>
                <th scope="col">Etat</th>
            </tr>
        </thead>
        @foreach($users as $user )
        <tbody>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role}}</td>
                <td>
                    @if($user->active)
                    <a href="{{route('bloquer',['id'=>$user->id])}}" class="btn btn-danger">bloquer</a>
                    @else
                    <a href="{{route('debloquer',['id'=>$user->id])}}" class="btn btn-warning">debloquer</a>
                    @endif
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    {{$users->links()}}
</center>
@endsection
