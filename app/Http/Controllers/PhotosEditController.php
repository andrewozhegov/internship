<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Gate;

use App\Photo;

class PhotosEditController extends Controller
{

    public function show($status = null)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        $photos = Photo::all();

        return view('admin.photosedit', [
            'status' => $status,
            'photos' => $photos
        ]);
    }

    public function add(Request $request)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        $this->validate($request, [
            'name' => 'required',
            'image' => 'file|image',
            'mic' => 'file|image',
            'annotation' => 'required'
        ]);

        $name = $request->get('name');
        $image = 'photos/'.$request->file('image')->getClientOriginalName();
        $mic = 'photos/mic/'.$request->file('mic')->getClientOriginalName();
        $annotation = $request->get('annotation');

        if (Storage::put($image, file_get_contents($request->file('image')->getRealPath())))
        {
            if (Storage::put($mic, file_get_contents($request->file('mic')->getRealPath())))
            {
                Photo::create([
                    'name' => $name,
                    'image' => $image,
                    'mic' => $mic,
                    'annotation' => $annotation
                ]);
            } else Storage::delete($image);
        }

        return redirect('admin/photosedit');
    }

    public function delete($id)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        $photo = Photo::find($id);
        Storage::delete($photo->image);
        Storage::delete($photo->mic);
        $photo->delete();

        return redirect('admin/photosedit');
    }
}
