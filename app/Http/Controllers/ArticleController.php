<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }
    public function create(): View
    {
        return view('articles.create');
    }
    public function store(Request $request): RedirectResponse
    {
        Article::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully');
    }
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
    }
}
