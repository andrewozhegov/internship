<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class VisitorsController extends Controller
{
    public function show()
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        return view('admin.visitors', [
            'visitors' => Visitor::all()
        ]);
    }

    public function delete($id)
    {
        if (Gate::denies('admin'))
        {
            return redirect('/');
        }

        Visitor::find($id)->delete();

        return redirect('admin/visitors');
    }
}
