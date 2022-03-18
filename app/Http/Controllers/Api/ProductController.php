<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = false;
        $products = Product::where('category_id', '中等')->where('supplier_id', 2)->orderBy('qty_instock', 'asc')->get();
        if (isset($products)) {
            $status = true;
        }
        return ['status' => $status, 'result' => $products];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$product = new Product;
        $product = new Product($request->all());
        $result = $product->save();
        if ($result) {
            return ['status' => 1];
        } else {
            return ['status' => 0];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $status = false;
        //$product = Product::findOrFail($id);
        $product = Product::where('category_id', 'Game')->first();
        if (isset($product)) {
            $status = true;
        }
        return ['status' => $status, 'result' => $product];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        return $request->all();

        //變更單一欄位
        // $product->name = $request->name;
        // $rows = $product->save();

        //多欄位涵蓋
        $rows = $product->update($request->all());

        if ($rows == 1) {
            return ['status' => true];
        } {
            return  ['status' => false];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $status = $product->delete();
        return ['status' => $status];
    }

    public function demoModelBinding(Product $product)
    {
        //$product = Product::find($product);
        dd($product);
    }
}
