<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(Request $request): View
    {
        $articles = Article::paginate(3);
        $flashMessage = $request->session()->get('status');

        return view('article.index', compact('articles', 'flashMessage'));
    }

    public function show(int $id): View
    {
        $article = Article::findOrFail($id);
        return view('article.show', compact('article'));
    }

    public function create(): View
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:100'
        ]);

        $article = new Article();
        $article->fill($data);
        $article->save();

        $request->session()->flash('status', 'Article has been added');
        return redirect()
            ->route('articles.index');
    }
}
