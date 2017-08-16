<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;

class TestBookController extends Controller
{
    public function show($status = null)
    {
        return view('admin.testbook',[
            'status' => $status,
            'tests' => Test::all()
        ]);
    }

    public function delete($id)
    {
        Test::find($id)->delete();

        return redirect('admin/testbook');
    }
}
