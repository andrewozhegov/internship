<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Blog;

class BlogEditController extends Controller
{
    public function show($id = null, $status = null)
    {
        if ($id != null) {
            $status = 'update';
            $blog = Blog::find($id);
            $blogs = [
                'title' => $blog->title,
                'image' => $blog->image(),
                'text' => $blog->text
            ];
        } else $blogs = Blog::all();

        return view('admin.blogedit',[
            'status' => $status,
            'blogs' => $blogs
        ]);
    }

    public function add(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'file|image',
            'text' => 'required'
        ]);
        $title = $request->get('title');
        $image = 'blog_img/'.$request->file('blog-img')->getClientOriginalName();
        $text = $request->get('text');

        if (Storage::put($image, file_get_contents($request->file('blog-img')->getRealPath())))
        {
            Blog::create([
                'title' => $title,
                'image' => $image,
                'text' => $text
            ]);
        }

        return redirect('admin/blogedit');
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'image',
            'text' => 'required'
        ]);
        $title = $request->get('title');
        $image = 'blog_img/'.$request->file('blog-img')->getClientOriginalName();
        $text = $request->get('text');

        $blog = Blog::find($id);

        if (Storage::delete($blog->image))
        {
            if (Storage::put($image, file_get_contents($request->file('blog-img')->getRealPath())))
            {
                $blog->update([
                    'title' => $title,
                    'image' => $image,
                    'text' => $text
                ]);
            }
        }

        return redirect('admin/blogedit');
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        Storage::delete($blog->image);
        $blog->getComments()->delete();
        $blog->delete();

        return redirect('admin/blogedit');
    }
}