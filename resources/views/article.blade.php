<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('contenu')

    <form action="{{route('savearticle')}}" method="post" enctype="multipart/form-data">
        @csrf

        @if ($errors-> any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{$error}}</li>

                @endforeach
            </ul>
            @endif

        </div>
        <label for="titre">nom de l'assurance <input type="text" name="titre" id="titre" value="{{old('titre')}}"> </label>
        <label for="description">description<textarea type="text" name="description" id="description"> </textarea></label>
        <label for="prix">prix <input type="number" name="prix" id="" value="{{old('prix')}}"> </label>
        <label for="photo"> photo du client<input type="file" name="photo" id="photo" value="{{old('photo')}}"> </label>
        <input type="submit" value="envoyer">
    </form>
   
    <center>
        <h2>Liste des assurances</h2>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NOM l'assurance</th>
                    <th scope="col">Description</th>
                    <th scope="col">Prix de l'assurance</th>
                    <th scope="col">Détails</th>
                </tr>
            </thead>
            @foreach ($articles as $article )
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{$article->titre}}</td>
                    <td>{{$article->description}}</td>
                    <td>{{$article->prix}}</td>
                    <td><a href="detailarticle/{{$article->id}}" class="btn btn-primary">voir le détail</a></td>                    
                </tr>
            </tbody>
            @endforeach
        </table>
    </center>
    @endsection
</body>
</html>
