<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
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
            $slidebar = Artikel::with('kategori')->orderBy('created_at','desc')->get();      
            return view ('frontend.index',compact('slidebar'));
    
    }


    public function katalog(Artikel $artikel)
    {
        return view ('frontend.catalog');
    }

  public function singlekatalog(Artikel $artikel)
  {
        $artikel = Artikel::with('kategori', 'tag', 'user')->where('slug', '=',$artikel->slug)->first();
        return view('frontend.details',compact('artikel'));
    }

    public function tentang()
    {
        return view ('frontend.about');
    }
}
