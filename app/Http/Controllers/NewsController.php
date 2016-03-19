<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Http\Requests\RequestNews;

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

    /**
     * display specific news
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

        $news = News::find($id);
        return view('news.news_detail', compact('news'));
    }

    /**
     * list all news in datatables
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function manageNews()
    {
        $news = News::all();
        return view('news.manage_news', compact('news'));
    }


    /**
     * save news in database
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(RequestNews $requestNews)
    {

        try {
            $inputs=\Request::all();
            $destinationPath = 'news_image'; // upload path
            $extension = \Input::file('image_name')->getClientOriginalExtension(); // getting image extension
            //$fileName = rand(11111,99999).'.'.$extension; // renameing image
            //\Input::file('image_name')->move($destinationPath, $fileName);
            $inputs['image_name'] = 'safasf';

            News::create($inputs);
            Session::flash('flash_message', 'News successfully added!');
            return redirect(route('news.index'));
        } catch(\Exception $e) {
            //echo $e->getMessage();
        }


    }
    public  function edit($id)
    {
        $news = News::find($id);
         return view('news.edit' ,compact('news'));
    }
    public function newsDetail()
    {
        return view('news.news_detail');
    }

    public function update($id,RequestNews $requestNews)
    {
        try {
            $inputs=\Request::all();
            if (\Input::file('image_name')){


                $destinationPath = 'news_image'; // upload path
                $extension = \Input::file('image_name')->getClientOriginalExtension(); // getting image extension
                $fileName = time().'.'.$extension; // renameing image
                \Input::file('image_name')->move($destinationPath, $fileName);
                $inputs['image_name'] = $fileName;
            }

            unset($inputs['_token']);
            unset($inputs['_method']);
            News::where('news_id', $id)->update($inputs);
            Session::flash('flash_message', 'News successfully added!');
            return redirect(route('manage.news'));
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
    }
    public function index()
    {
        $news = News::all();

        return view('news.index', compact('news'));
    }
}
