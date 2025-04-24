<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $articles = Article::paginate(3);
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $article = new Article();
        return view('article.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request): RedirectResponse
    {
        $article = new Article();
        $article->fill($request->all());
        $article->save();

        return redirect()
            ->route('articles.index')
            ->with('status', 'Article has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article): View
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article): View
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article): RedirectResponse
    {
        $article->fill($request->all());
        $article->save();

        return redirect()
            ->route('articles.index')
            ->with('status', 'Article has been edit successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();
        return redirect()
            ->route('articles.index')
            ->with('status', 'Article has been deleted successfully');
    }
}
