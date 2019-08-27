<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
use App\Kategori;
use App\Tag;
use App\User;

class frondendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            
            $artikel = artikel::with('kategori', 'tag')->orderBy('created_at','desc')->get();      
            return view ('index',compact('artikel'));
    
    }

    public function blog(Artikel $artikel)
    {
        $artikel = artikel::all();
        return view ('frontend.index2', compact('artikel'));
    }

    public function singleblog(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.singgle-blog', compact('artikel','kategori','tag'));
    }

    public function tentang()
    {
        return view ('about');
    }

    
    public function kategoripost(Artikel $kategori)
    {
        $kategori = kategori::all();
        return view ('frontend.kategori-post', compact('kategori'));
    }
}
