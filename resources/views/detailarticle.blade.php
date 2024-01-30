    @extends('layout')
    @extends('commentaire')
    @section('contenu')
    <center>
        <h2>detail sur une assurance</h2>
        <table class="table">
            <thead>
                <tr class="table-warning">
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Description</th>
                    <th scope="col">photo</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Client</th>
                    {{-- <th scope="col">action</th> --}}

                </tr>
            </thead>
            <tbody>
                <tr class="table-danger">
                    <th scope="row">n*</th>
                    <td>{{$article->titre}}</td>
                    <td>{{$article->description}}</td>
                    <td><img src="{{asset('storage/'.$article->photo)}}" alt="image" width="200" height="200"></td>
                    <td>{{$article->prix}}</td>
                    <td>{{$article->user->name}}</td>
                    {{-- <td>
                        <a href="updatearticle/{{$article->id}}" class="btn btn-warning">edit</a><br><br>
                        <a href="deletearticle/{{$article->id}}" class="btn btn-danger">delete</a>
                    </td> --}}
                </tr>
            </tbody>
        </table>

        <div class="offset-3 col-md-6 well">
            <form action="{{route('savecomment',['id'=>$article->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="contenu">commentaire à propos de l'assurance
                        <textarea name="contenu" id="" cols="30" rows="10" value="{{old('contenu')}}"></textarea>
                        <input type="submit" name="envoyer" value="envoyer">
                    </label>
                </div>
            </form>
        </div>
        @foreach ($commentaires as $content )
        <ul>
            commentaire n-{{$content->id}}
            <ol>
                {{ $content->contenu}} <br>
            </ol>
            {{-- <ol>
                <a href="/detailarticle/updatecommentaire/{{$content->id}}" class="btn btn-warning">edit comment</a><br><br>
                <a href="/detailarticle/deletearticle/{{$content->id}}" class="btn btn-danger">delete comment</a>
            </ol> --}}

        </ul>
        @endforeach<br>
    </center>
    @endsection
