<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Blog;

class BlogEditController extends Controller
{
    public function show($status = null)
    {
        $blogs = Blog::all();

        return view('admin.blogedit',[
            'status' => $status,
            'blogs' => $blogs
        ]);
    }

    public function add(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'image',
            'text' => 'required'
        ]);

        $title = $request->get('title');
        $image = 'blog_img/'.$request->file('blog-img')->getClientOriginalName();
        $text = $request->get('text');

        if (Storage::put($image, file_get_contents($request->file('blog-img')->getRealPath()))) {
            Blog::create([
                'title' => $title,
                'image' => $image,
                'text' => $text
            ]);
        }

        return $this->show();
    }

    public function delete($id)
    {

        $blog = Blog::find($id);

        Storage::delete($blog->image);

        $blog->delete();

        return $this->show();
    }
}
