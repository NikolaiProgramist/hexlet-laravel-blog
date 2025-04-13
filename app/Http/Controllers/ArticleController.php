<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::paginate(3);
        return view('article.index', compact('articles'));
    }
}
