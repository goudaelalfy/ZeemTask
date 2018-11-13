<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Article\Entities\Article;

class ArticleController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct() {
        $this->middleware('permission:article-list');
        $this->middleware('permission:article-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:article-edit', ['only' => ['edit', 'update']]);


        $this->middleware('permission:article-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $articles = Article::latest()->paginate(5);
        return view('article::index', compact('articles'))
                        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('article::form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        request()->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'body' => 'required|regex:/^[\pL\s\-]+$/u|max:1000',
        ], [
            'name.regex'  =>'Name should only be entered in alphabetic letters',
            'body.regex'  =>'Body should only be entered in alphabetic letters'
            ]);


        Article::create($request->all());


        return redirect()->route('articles')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article) {
        return view('article::show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article) {
        return view('article::form', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article) {
         request()->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'body' => 'required|regex:/^[\pL\s\-]+$/u|max:1000',
        ], [
            'name.regex'  =>'Name should only be entered in alphabetic letters',
            'body.regex'  =>'Body should only be entered in alphabetic letters'
            ]);



        $article->update($request->all());


        return redirect()->route('articles')
                        ->with('success', 'Article updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article) {
        $article->delete();


        return redirect()->route('articles')
                        ->with('success', 'Article deleted successfully');
    }

}
