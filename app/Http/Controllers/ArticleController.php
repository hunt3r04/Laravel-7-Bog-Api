<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Grab All Articles
        $articles = Article::paginate(15);
        //Return collection of articles as a resource
        return ArticleResource::collection($articles);

    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create New article
        if( $article = Article::create($request->all())){
            return new ArticleResource($article);
        }
      }

        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get Single Article
        $article = Article::findOrFail($id);
        //Return single article
        return new ArticleResource($article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //Edit Individual Article
        $article =  Article::findOrFail($request->input('id'));
        $article->title = $request->input('title');
        $article->slug = $request->input('slug');
        $article->body = $request->input('body');
        $article->category_id= $request->input('category_id');
        $article->author= $request->input('author');
        if($article->save()){
            return new ArticleResource($article);
        }
       
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Get Single Article
        $article = Article::findOrFail($id);

        if($article->delete()){
            return new ArticleResource($article);
        }
        

    }
}
