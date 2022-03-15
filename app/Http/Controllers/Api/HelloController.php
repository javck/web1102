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

    public function times(Request $request)
    {
        $status = 0;

        //順利完成，status => 1
        if (!$request->has('x') || !$request->has('y')) {
            $message = 'x 或 y 不存在';
        } else {
            $x = $request->x;
            $y = $request->y;
            if (!is_numeric($x) || !is_numeric($y)) {
                $message = 'x 或 y 不是數字';
            } else {
                $result = $x * $y;
                $status = 1;
            }
        }

        if ($status == 1) {
            return ['status' => $status, 'result' => $result];
        } else {
            return ['status' => $status, 'message' => $message];
        }
    }
}
