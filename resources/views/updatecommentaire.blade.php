<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>update comment</title>
</head>
<body>
    <form action="{{route('updatecomment')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$commentaire->id}}">
        <label for="">commentaire</label>
        <textarea type="text" name="contenu" id="contenu"  cols="30" rows="10">{{$commentaire->contenu}}</textarea><br><br>
        <input type="submit" value="enregistrer">
    </form>
</body>
</html>
