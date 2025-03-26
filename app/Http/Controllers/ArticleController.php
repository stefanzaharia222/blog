<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->user_id = auth()->id(); 
        $article->save();
        return redirect()->route('articles.index');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();
        return redirect()->route('articles.index');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('articles.index');
    }
}
