<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorsController extends Controller
{
    public function show()
    {
        return view('admin.visitors', [
            'visitors' => Visitor::all()
        ]);
    }

    public function delete($id)
    {
        Visitor::find($id)->delete();

        return redirect('admin/visitors');
    }
}
