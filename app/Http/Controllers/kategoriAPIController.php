<?php

namespace App\Http\Controllers;

use App\kategori;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
 
class kategoriAPIController extends Controller
{
    public function index()
    {
        return new CategoryCollection(Category::paginate());
    }
 
    public function show(kategori $kategori)
    {
        return new CategoryResource($kategori->load(['articles']));
    }

    public function store(Request $request)
    {
        return new CategoryResource(kategori::create($request->all()));
    }

    public function update(Request $request, kategori $kategori)
    {
        $kategori->update($request->all());

        return new CategoryResource($kategori);
    }

    public function destroy(Request $request, kategori $kategori)
    {
        $kategori->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
