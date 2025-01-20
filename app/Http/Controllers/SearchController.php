<?php

namespace App\Http\Controllers;

use App\Models\PackageTour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request) 
    {
        $keyword = $request->input('keyword');
        // $searchResult = PackageTour::where('name', 'like', "%$keyword%")
        //     ->orWhere('location', 'like', "%$keyword%")
        //     ->get();

        $searchResult = PackageTour::query()
            ->when($keyword, function ($query) use ($keyword) {
                $query->where('name', 'like', "%$keyword%")
                    ->orWhere('location', 'like', "%$keyword%");
            })->get();

        return view('search.index', compact('keyword', 'searchResult'));
    }
}
