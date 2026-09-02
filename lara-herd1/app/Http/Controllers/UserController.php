<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function test()
    {
        $org = 'IsDB';
        $tsp = 'TCL';
        $round = 70;

        /* return view('pages.price', [
            'organization' => $org,
            'tsp'          => $tsp,
            'round'        => $round,
        ]); */
        return view('pages.price', compact('org', 'tsp', 'round'));
    }
}
