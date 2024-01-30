<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class ArticleController extends Controller
{

    function show()
    {
        $articles = Article::paginate(5);
        return view('article', compact('articles'));
    }
    function showuser()
    {
        $users = User::paginate(5);
        return view('listuser', compact('users'));
    }

    function showseller()
    {
        $users = User::paginate(5);
        return view('listsellers', compact('users'));
    }

    function details(Request $request)
    {
        $article = Article::find($request->id);
        return view('detailarticle', ['article' => $article, 'commentaires' => $article->commentaire]);
    }

    function save(Request $request)
    {
        $article = new Article();
        $article->titre = $request->titre;
        // le premier nom correspond à ce qui est dans base de donne, le deuxième nom designe ce qui sera dans le formulaire formulaire
        $article->description = $request->description;
        $article->prix = $request->prix;
        $article->user_id = Auth::user()->id;
        $request->photo->store('public');
        $article->photo = $request->photo->hashName();
        $article->save();
        return redirect('/dashboard');
    }

    public function vueupdate($id)
    {
        return view('updatearticle', ['article' => Article::find($id)]);
    }

    function updat(Request $request)
    {
        $article =  Article::find($request->id);
        $newphoto = $request->photo;
        if ($newphoto !== null) {
            Storage::delete('/public/storage' . $article->photo);
            $request->photo->store('public');
            $article->photo = $request->photo->hashName();
        } 
        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->prix = $request->prix;
        $article->user_id = $request->user_id;
        $article->user_id = Auth::user()->id;
        $article->save();
        return redirect('/dashboard'); // retour de l'élément modifié dans la base de donnée
    }
    function article_user(){
        $user= Auth::user();
        $article = Article::where('user_id', $user->id)->get();
        return view ('dashboard',['articles'=>$article]);
    }


    function delete($id)
    {
        $article = Article::find($id);
        $article->delete();
        // dd('aze');
        return redirect('dashboard');
    }

    function bloquer(Request $request)
    {

        $user = User::find($request->id);
        if ( Auth::user()->id==$user->id){
            return redirect ('listuser');
        }
        $user->active= false;
        $user->save();
        return redirect('listuser');
    }

    function debloquer(Request $request)
    {
        $user = User::find($request->id);
        $user->active= true;
        $user->save();
        return redirect('listuser');

    }

}
