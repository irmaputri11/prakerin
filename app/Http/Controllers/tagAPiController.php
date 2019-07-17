<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
 
class tagAPIController extends Controller
{
    public function index()
    {
        return new CategoryCollection(Category::paginate());
    }
 
    public function show(tag $tag)
    {
        return new CategoryResource($tag->load(['articles']));
    }

    public function store(Request $request)
    {
        return new CategoryResource(tag::create($request->all()));
    }

    public function update(Request $request, tag $tag)
    {
        $tag->update($request->all());

        return new CategoryResource($tag);
    }

    public function destroy(Request $request, tag $tag)
    {
        $tag->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
