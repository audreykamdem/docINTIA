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
        <label for="titre">nom de l'assurance<input type="text" name="titre" id="titre" value="{{old('titre')}}"> </label>
        <label for="description">description<textarea type="text" name="description" id="description"> </textarea></label>
        <label for="prix">prix <input type="number" name="prix" id="" value="{{old('prix')}}"> </label>
        <label for="photo"> photos de l'assurance<input type="file" name="photo" id="photo" value="{{old('photo')}}"> </label>
        <input type="submit" value="envoyer">
    </form>

@endsection