<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Article::latest()->get();
        return view('article.index', compact('data'));
    }

    public function landing()
{

    $data = Article::latest()->take(3)->get();
    return view('welcome', compact('data'));
}

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|min:3',
            'content' => 'required|min:10',
            'image'   => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        Article::create($validated);
        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('article.edit', ['dt' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'   => 'required|min:3',
            'content' => 'required|min:10',
            'image'   => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($article->image && Storage::disk('public')->exists($article->image)) {
                Storage::disk('public')->delete($article->image);
            }
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($validated);
        return redirect('/articles');
    }

    public function destroy(Article $article)
    {
        if ($article->image && Storage::disk('public')->exists($article->image)) {
            Storage::disk('public')->delete($article->image);
        }

        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Artikel berhasil dihapus!');
    }
}
