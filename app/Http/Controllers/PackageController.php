<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        return view('welcome')
            ->with(['packages' => Package::all()]);
    }

    public function printPackage(Request $request)
    {
        $output = collect();

        $all = Package::find($request->id)->fish;
        $pages = $all->chunk(15);
        $empty = new Fish([
            'pol' => '',
            'ang' => ''
        ]);
        foreach ($pages as $page) {
            for ($i = 15 - count($page); $i > 0; $i--) {
                $page->push($empty);
            }
            $output->push($page->values());
        }

        return view('print',
            ['pages' => $output,
                'reverse' => [2, 1, 0, 5, 4, 3, 8, 7, 6, 11, 10, 9, 14, 13, 12]]);
    }

    public function printTest(Request $request)
    {
        $all = Package::find($request->id)->fish->sortBy($request->lang);
        return view('test', [
            'all' => $all,
            'lang' => $request->lang]);
    }

    public function showWordbank(Request $request)
    {
        $all = Package::find($request->id)->fish->sortBy('pol');
        return view('wordbank', [
            'all' => $all,]);
    }

    public function createPackage(Request $request)
    {
        $request->validate(['name' => 'required']);
        Package::create(['name' => $request->name]);
        return back();
    }
}
