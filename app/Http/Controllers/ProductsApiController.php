<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CRSF
        $token = csrf_token();
        //Insert Product
        $prod = DB::table('products')->insertGetId(['id' => NULL, 'name' => 'prod55', 'description' => 'prod55', 'price' => '150', 'image' => 'imgProd/noimage.png', 'created_at' => NOW(), 'updated_at' => NOW()]);
        //Insert  2 Categories For the product
        $cat1 = DB::table('category_product')->insertGetId(['id' => NULL, 'id_product' => $prod, 'id_category' => '1']);
        $cat2 = DB::table('category_product')->insertGetId(['id' => NULL, 'id_product' => $prod, 'id_category' => '2']);
        var_dump($prod);
        var_dump($cat1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}