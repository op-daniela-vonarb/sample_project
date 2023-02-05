<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // get and show all listings
    public function index() {
        //dd(request('tag'));
        return view('listings.index', [
            // 'listings' => Listing::all() shows in random order
            'listings' => Listing::latest()->filter(request(['tag']))->get() // gets all listings but shows them in order
        ]);      
    }

    // show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
