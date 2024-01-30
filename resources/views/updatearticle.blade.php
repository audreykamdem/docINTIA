<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>update article</title>
</head>
<body>
    <form action="{{route('updatearticle')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
        <label for="">Titre<input type="text" name="titre" id="" placeholder="titre" value="{{$article->titre}}">
        </label> <br><br>
        <label for="">description</label>
        <textarea type="text" name="description" id="description"  cols="30" rows="10">{{$article->description}}</textarea><br><br>
        
        <label for="">modifier l'image du client<input type="file" name="photo" id="photo" value="{{$article->photo}}"> <img src="{{asset('storage/'.$article->photo)}}" alt="image" ></label><br><br>
        <label for="">prix de l'assurance<input type="number" name="prix" id="" placeholder="prix" value="{{$article->prix}}">
        </label><br><br>
        <input type="submit" value="sauvegarder">
    </form>
</body>
</html>
