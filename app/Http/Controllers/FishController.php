<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Package;
use Illuminate\Http\Request;

class FishController extends Controller
{
    public function create(Request $request)
    {
        Fish::create([
            'ang' => $request->ang,
            'pol' => $request->pol,
            'package_id' => $request->package]);
        return back();
    }

    public function add()
    {
        return view('add');
    }

}
