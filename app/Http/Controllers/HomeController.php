<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [ 'products' => [
            [
                'id' => 0,
                'image' => '',
                'description' => 'All-New Kindle',
                'price' => '69.90',
                'old_price' => '79.99',
                'status' => 'sale',
            ],
            [
                'id' => 1,
                'image' => '',
                'description' => 'Kindle Paperwhite',
                'price' => '119.99',
                'old_price' => '',
                'status' => 'new',
            ],
            [
                'id' => 2,
                'image' => '',
                'description' => 'Kindle Voyage',
                'price' => '199.99',
                'old_price' => '',
                'status' => '',
            ],
            [
                'id' => 3,
                'image' => '',
                'description' => 'All-New Kindle for Kids Bundle',
                'price' => '99.99',
                'old_price' => '',
                'status' => 'new',
            ],
            [
                'id' => 4,
                'image' => '',
                'description' => 'Certified Refurbished Kindle Voyage',
                'price' => '152.00',
                'old_price' => '169.00',
                'status' => 'sale',
            ],
            [
                'id' => 5,
                'image' => '',
                'description' => 'Kindle Paperwhite, 6"',
                'price' => '139.99',
                'old_price' => '',
                'status' => '',
            ],
            [
                'id' => 6,
                'image' => '',
                'description' => 'Kindle E-reader, 6"',
                'price' => '69.99',
                'old_price' => '79.99',
                'status' => 'sale',
            ],
            [
                'id' => 7,
                'image' => '',
                'description' => 'Kindle, 6" E Ink Display',
                'price' => '30.09',
                'old_price' => '',
                'status' => '',
            ]
        ]]);
    }
}
