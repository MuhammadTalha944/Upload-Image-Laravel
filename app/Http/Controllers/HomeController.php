<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Storage;
use Illuminate\Support\Facades\Input;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('/home');
    }
  public function upload(Request $request)
  {
      $blogs = Blog::all()->toArray();

      return view('/display', compact('blogs'));
  }

    public function store(Request $request)
    {

            $blogs = new Blog();
            $blogs->title=$request->get('title');
            $blogs->description=$request->get('description');

            $file = Input::file('file');
            $name=$file->getClientOriginalName();
             Storage::put($file->getClientOriginalName(),file_get_contents($file));

        $blogs->Image=$name;
        $blogs->save();
        $blogs=Blog::all();
        return View('/display',compact('blogs'));

        }
}
