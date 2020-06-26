<?php

namespace App\Http\Controllers;

use App\Department;
use App\News;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //get all the departments and excerpt each of their desc
        $data['departments']  = Department::cursor()->map(function ($dept) {

            $dept->dept_desc = Str::limit($dept->dept_desc, 40);
            return $dept;
        });

        //get the latest 4 news and excerpt map of their content
        $data['news'] = News::latest('updated_at')->take(4)->get()->map(function ($news) {
            $news->news_content = Str::limit($news->news_content, 40);
            return $news;
        });
        return view('home', $data);
    }
}
