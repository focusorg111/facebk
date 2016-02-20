<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Session;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::all();

        return view('news.index', compact('news'));
    }

    /**
     * @return view
     */
    public function create()
    {
        return view('news.addnews');

    }

    public function show($id) {

        $news = News::find($id)->toarray();
        return view('news.news_detail' ,compact('news'));
    }
    public function manageNews()
    {
        $news = News::all();
        return view('news.manage_news',compact('news'));
    }

    /**
     * Define variable
     * print array
     * add news
     */
    public function store()
    {
        $inputs=\Request::all();
        News::create($inputs);
        Session::flash('flash_message', 'News successfully added!');
        return redirect(route('add.news'));

    }
    public  function edit($id)
    {
        $news = News::find($id)->toarray();
       echo 'h';
        // return view('news.' ,compact('news'));
    }
    public function newsDetail()
    {
        return view('news.news_detail');
    }
    public function index()
    {
        $news = News::all();

        return view('news.index', compact('news'));
    }
}
