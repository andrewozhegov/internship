<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestBookController extends Controller
{
    public function show($status = null)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        return view('admin.testbook', [
            'status' => $status,
            'tests' => Test::all()
        ]);
    }

    public function delete($id)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        Test::find($id)->delete();

        return redirect('admin/testbook');
    }
}
