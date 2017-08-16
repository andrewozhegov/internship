<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Blog;
use App\Comment;

class BlogController extends Controller
{
    public function show($status = null)
    {
        return view('blog',[
            'status' => $status,
            'blogs' => Blog::all()
        ]);
    }

    public function comment(Request $request)
    {
        $this->validate($request, [
            'text' => 'required'
        ]);

        $user = Auth::user();
        $blog = Blog::find($request->get('blog_id'));
        $text = $request->get('text');

        $blog->getCommentators()->save($user)->getComments()->where([['blog_id', '=', $blog->id], ['text', '=', null]])->update(['text' => $text]);

        return redirect('blog');
    }

    public function deleteComment($id)
    {
        Comment::find($id)->delete();

        return redirect('blog');
    }
}
