@extends('layout')
@section('content')

<justify>

    <div class="header-user-actions">
        <h2>Liste des assurances</h2>

        <button style="color:whitesmoke ; width: 150px;height: 50px;text-align: center;border-radius: 20px;" class="btn-primary" ><b><a href="{{route('creerarticle')}}" style="text-decoration: none;">ajouter un article</a></b></button>
    </div>
<br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Prix</th>
                <th scope="col">Action</th>
                <th scope="col">Détails</th>
            </tr>
        </thead>
        @foreach ($articles as $article )
        <tbody>
            <tr>
                <th scope="row">produit n- {{$article->id}}</th>
                <td>{{$article->titre}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->prix}}</td>
                <td>
                    <a href="updatearticle/{{$article->id}}" class="btn btn-warning">editer</a><br><br>
                    <a href="detailarticle/deletearticle/{{$article->id}}" class="btn btn-danger">suprimer</a>
                </td>
                <td><a href="detailarticle/{{$article->id}}" class="btn btn-primary">plus de détail</a></td>
            </tr>
        </tbody>
        @endforeach
    </table>
</justify>

@endsection
