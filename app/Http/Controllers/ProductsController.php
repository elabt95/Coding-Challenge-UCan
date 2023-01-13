<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //check the authentification
        if (Auth::check()) {

            //get all categories and products
            $categories = Category::all();
            $products = Products::with('categories')->get();

            //get the view of products with their categories
            return view("Products.index")->with([
                "products" => $products
            ])->with('categories')->with('categoriesv', $categories);;
        }

        return Redirect::route('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get all categories for <select>
        $categories = Category::all();
        //get the view of products creation
        return view('Products.create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation alert
        $messages = [
            'name.required' => 'Name Should not be empty',
            'description.required' => 'Description Should not be empty',
            'price.required' => 'Price Should not be empty',
            'image.required' => 'The file Should be type image',
        ];
        //validation settings
        $this->validate(
            $request,
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required',
                'image' => 'image'

            ],
            $messages
        );
        //uploading the file
        if ($request->hasFile('image')) {
            //get the file selected
            $fileObject = $request->file('image');
            //get the extension
            $extension = $fileObject->getClientOriginalExtension();
            //make a name to use for the file after upload
            $pathString =  time() . '.' . $extension;
            //define the folder where to save the file
            $pathDestination = public_path('/imgprod');
            //upload the file
            $fileObject->move($pathDestination, $pathString);
        }
        //add product process
        $prod = new Products();
        $prod->name = $request->input('name');
        $prod->description = $request->input('description');
        $prod->price = $request->input('price');
        if ($request->hasFile('image')) {
            $prod->image = 'imgprod/' . $pathString;
        } else {
            $prod->image = 'imgprod/noimage.png';
        }
        $prod->save();
        //get the id of inserted product
        $productId = $prod->id;
        //add categories of the product
        foreach ($request->input('categories') as $catSelected) {
            echo "$catSelected - $productId <br>";
            if ($catSelected != '') {
                DB::table('category_product')->insert(
                    array(
                        'id_product'     =>   $productId,
                        'id_category'   =>   $catSelected
                    )
                );
            }
        }

        //redrirect to products list
        return redirect()->route("products.index")->with([
            "success" => "Product added successfully"
        ]);
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