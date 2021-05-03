<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class PackageController extends Controller
{
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
}
