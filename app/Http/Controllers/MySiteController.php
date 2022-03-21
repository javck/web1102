<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Supplier;

class MySiteController extends Controller
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
        return response()->view('info.about', [], 202)->header('Content-Type', 'JSON');
        //return view('info.about');
    }

    public function renderContactPage()
    {
        //$modes = ['blog' => '部落格', 'film' => '影片', 'tweat' => 'TWEAT'];
        $modes = Supplier::pluck('name', 'id');
        //dd($modes);
        return view('contacts.create', compact('modes'));
    }

    public function editContactPage($id)
    {
        $contact = Contact::findOrFail($id);
        $modes = ['影片' => ['video' => '長影片', 'tiktok' => '短影片'], '文章' => ['blog' => '部落格', 'tweat' => 'TWEAT']];
        return view('contacts.edit', compact('contact', 'modes'));
    }

    public function updateContact($id, Request $request)
    {
        $contact = Contact::findOrFail($id);
    }

    public function saveContact(ContactRequest $request)
    {
        $data = $request->all(); //取得所有欄位資料
        dd($request->all());
        $data['equips'] = implode(',', $data['equips']);
        $contact = Contact::create($data);
        dd($contact);
    }
}
