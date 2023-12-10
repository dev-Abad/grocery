<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\groceryModel;

class groceryItemController extends Controller
{
    public function index()
    {
        $items = groceryModel::all();
        return view('index', compact('items'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        groceryModel::create($request->all());
        return redirect()->route('index');
    }
}
