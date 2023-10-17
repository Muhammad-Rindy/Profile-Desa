<?php

namespace App\Http\Controllers;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function indexContact()
    {
        return view('contact');
    }
    public function indexArticle()
    {
        return view('article');
    }
    public function indexSejarah()
    {
        return view('sejarah');
    }
    public function visiMisi()
    {
        return view('visi-misi');
    }
    public function aparatur()
    {
        return view('aparatur');
    }
    public function agenda()
    {
        return view('agenda');
    }
    public function pembangunan()
    {
        return view('pembangunan');
    }
    public function produk()
    {
        return view('produk');
    }
    public function infografis()
    {
        return view('infografis');
    }
    public function indexArticle1()
    {
        return view('articles.blog-1');
    }
    public function indexArticle2()
    {
        return view('articles.blog-2');
    }
    public function indexArticle3()
    {
        return view('articles.blog-3');
    }
    public function indexArticle4()
    {
        return view('articles.blog-4');
    }
    public function indexArticle5()
    {
        return view('articles.blog-5');
    }
    public function indexArticle6()
    {
        return view('articles.blog-6');
    }

}