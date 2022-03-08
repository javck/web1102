<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function doTest()
    {
        return 'Hello World';
    }

    public function renderGamerPage()
    {
        return view('gamer');
    }

    public function renderStorePage()
    {
        $title = '<b style="color:red">怪物表</b>';
        $price = 9999;
        //return view('demo.store', ['title' => '怪物表', 'price' => 9999]);
        return view('demo.store', compact('title', 'price'));
        //return view('demo.store')->with('title', '怪物表')->with('price', 9999);
    }

    public function renderHomePage()
    {
        $age = 19;
        //$items = ['ps5' => 'PS5', 'swtich' => 'Nintendo Switch', 'xbox' => 'XBOX'];
        $items = [];
        return view('info.index', compact('age', 'items'));
    }

    public function renderAboutPage()
    {
        return view('info.about');
    }
}
