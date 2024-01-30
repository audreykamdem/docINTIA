<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class CommentaireController extends Controller
{
    function savecomment(Request $request){
        $commentaire = new Commentaire();
        $commentaire->contenu =$request->contenu;
        // le premier nom correspond à ce qui est dans base de donne, le deuxième nom designe ce qui sera dans le formulaire formulaire
        $commentaire->user_id =Auth:: user()->id;
        $commentaire->article_id =$request->id;
        $commentaire->save();
        $control = new ArticleController();
        return $control->details($request);
    }

    public function vueupdatecoment($id)
    {
        return view('updatecommentaire', ['commentaire' => Commentaire::find($id)]);
    }

    function updatecomment(Request $request){
        $commentaire =  Commentaire::find($request->id);
        $commentaire->contenu = $request->contenu;
        $commentaire->save();
        $control = new ArticleController();
        return $control->details($request);

    }

    function deletecomment(Request $request)
    {
        $commentaire = Commentaire::find($request->id);
        $commentaire->delete();
        return view('detailarticle/{id}')->with('message','suprimé avec succes');
    }
}
