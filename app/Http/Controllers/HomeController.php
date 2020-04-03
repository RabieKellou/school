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
        $arr['departments'] = Department::all()->map(function ($dept) {
            $dept->dept_desc = Str::limit($dept->dept_desc,40);
           //  dd($dept->dept_desc);

            return $dept;
       });
        $arr['news'] = News::latest('news_date')->take(4)->get()->map(function ($news) {
            $news->news_content = Str::limit($news->news_content,40);
            return $news;
       });
        // $arr['departments']= $arr['departments']->map(function ($dept) {
        //      $dept->dept_desc = substr($dept->dept_desc, 0, 100).'...';
        //     //  dd($dept->dept_desc);

        //      return $dept;
        // });

        // dd($arr['departments'][0]['dept_desc']);
        // dd($arr);
        return view('home', $arr);
    }
}
