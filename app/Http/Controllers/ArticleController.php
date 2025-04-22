<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\StoreArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::paginate(3);
        return view('article.index', compact('articles'));
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

    public function store(StoreArticleRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $article = new Article();
        $article->fill($data);
        $article->save();

        $request->session()->flash('status', 'Article has been added successfully');
        return redirect()
            ->route('articles.index');
    }

    public function edit(int $id): View
    {
        $article = Article::findOrFail($id);
        return view('article.edit', compact('article'));
    }

    public function update(StoreArticleRequest $request, int $id): RedirectResponse
    {
        $article = Article::findOrFail($id);
        $data = $request->validated();

        $article->fill($data);
        $article->save();

        $request->session()->flash('status', 'Article has been edit successfully');
        return redirect()
            ->route('articles.index');
    }

    public function destroy(Request $request, int $id): RedirectResponse
    {
        $article = Article::find($id);

        if ($article) {
            $article->delete();
        }

        $request->session()->flash('status', 'Article has been deleted successfully');
        return redirect()
            ->route('articles.index');
    }
}
