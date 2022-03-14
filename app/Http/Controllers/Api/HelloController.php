<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function getHello(Request $request, $name)
    {
        $content = 'Hello,' . $name;
        if ($request->has('secret')) {
            $content = $content . ', your secret is ' . $request->secret;
        }
        return ['status' => 1, 'result' => $content];
    }

    public function postHello(Request $request)
    {
        $content = 'Hello,' . $request->input('name');
        if ($request->has('secret')) {
            $content = $content . ', your secret is ' . $request->secret;
        }
        return ['status' => 1, 'result' => $content];
    }
}
