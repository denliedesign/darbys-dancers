<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $articles;

    public function __construct()
    {
        $this->articles = \App\Models\Article::all()->sortByDesc('created_at');
        View::share('articles', $this->articles);
    }

    public function index()
    {
        return view('articles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('update', Article::class);
        $article = new Article();
        return view('articles.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $article = Article::create($this->validateRequest());
        $this->storeImage($article);
        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $this->authorize('update', Article::class);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update($this->validateRequest());
        $this->storeImage($article);
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/articles');
    }

    private function validateRequest()
    {
        return request()->validate([
            'newsPhoto' => 'sometimes|file|image|max:5000',
            'newsTitle' => 'required',
            'newsContent' => 'required',
        ]);
    }

    private function storeImage($article)
    {
        if (request()->has('newsPhoto'))
        {
            $article->update([
                'newsPhoto' => request()->newsPhoto->store('uploads', 'public')
            ]);
        }

    }
}
