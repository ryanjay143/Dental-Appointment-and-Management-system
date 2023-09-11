<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductDetails;
use App\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with('category')->get();
        $categories = Category::with('products')->get();
        
        $productDetails = [];
        $totalQuantityById = [];

        foreach ($products as $product) {
            $details = ProductDetails::where('product_id', $product->id)->get();
            $productDetails[$product->id] = $details;

            $totalQuantity = $details->sum('qty');
            $totalQuantityById[$product->id] = $totalQuantity;
        }

        return view('admin/products', compact('products', 'categories', 'productDetails', 'totalQuantityById'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = DB::table('tb_category')->get();
        return view('admin/createProducts',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('products', $fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        Products::create($requestData);
        Alert::success('Add Product Successfully');
        return redirect()->route('product.view');
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
    public function stock(Request $request, $id)
    {
       $product = Products::findorFail($id);
       $product->input_stock = $request->input('stock');
       $product->stock = $product->input_stock + $product->stock;
       $product->save();
       Alert::success('Stock Updated Successfully');
       return redirect()->back();
    }
}
