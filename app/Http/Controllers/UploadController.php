<?php namespace App\Http\Controllers;
use App\Blog;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller {

    public function upload(Request $request){



        }


    public function store(Request $request)
    {
        if(Input::hasFile('file')){

            echo 'Uploaded';

            $file = Input::file('file');
            $file->move('uploads', $file->getClientOriginalName());

            $blog=new Blog([
                'title'=>$request->get('title'),
                'description'=>$request->get('description')



            ]);

            //dd($blog);
            //return redirect('/home');
    }

}
}
