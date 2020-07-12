<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Category;
use App\Http\Resources\Category as CategoryResource;
/**
 * @group  Category management
 *
 * APIs for managing users
 */
class CategoryController extends Controller
{
    /**
     * Display a listing of the Categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Grab All Categories
        $categories = Category::paginate(10);
        //Return collection of categorie as a resource
        return CategoryResource::collection($categories);
    }

    

    /**
     * Store a newly created Category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Create New Category
        if( $category = Category::create($request->all())){
            return new CategoryResource($category);
        }
    }

    /**
     * Display the specified Category.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get Single Article
        $category = Category::findOrFail($id);
        //Return single article
        return new CategoryResource($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //Edit Individual Article
        $category =  Category::findOrFail($request->input('id'));
        $category->name = $request->input('name');
        if($category->save()){
            return new CategoryResource($category);
        }
    }

    /**
     * Return edit form the specified Category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified Category from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         //Get Single Article
        $category = Category::findOrFail($id);
        //Delete Category
        if($category->delete()){
            return new CategoryResource($category);
        }
    }
}
