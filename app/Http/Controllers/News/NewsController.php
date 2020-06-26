<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticle;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['news'] = News::latest('updated_at')->paginate(8);
        return view('news.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticle $request)
    {
        dd($request->user()->isAdmin());
        $article = News::create([
            'user_id' => Auth::user()->user_id,
            'news_title' => $request->news_title,
            'news_content' => $request->news_content,
        ]);
        return redirect()->route('news.show', ['id' => $article->news_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$data['article'] = News::where('news_title', 'like', $title)->firstOrFail();
        $data['article'] = News::findOrfail($id);
        // dd($data['article']);
        return view('news.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['article'] = News::findOrfail($id);
        // dd($data['article']);
        return view("news.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreArticle $request, $id)
    {
        $article = News::findOrfail($id);
        $article->news_title = $request->get('news_title');
        $article->news_content = $request->get('news_content');
        $article->save();
        return redirect()->route('news.show', ['id' => $article->news_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = News::findOrfail($id);
        $article->delete();

        return redirect()->back()->withStatus('article was deleted');
    }
}
