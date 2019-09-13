<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'

        ]);

        $product = new Product([
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'type' => $request->get('type'),
            'price' => $request->get('price')
        ]);

        if($product instanceof Product){
            $product->save();
            toastr()->success('Product Added', 'Good');
            return  redirect('/products');
        }
        toastr()->error('An error occurred try again later');

        return back();
//        $notification = array(
//                'message' => 'Thanks! Your Product has been added',
//                'alert-type' => 'success'
//        );

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
        //
        $products = Product::all($id);
        return view('products.index', compact('products'));

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
        $product = Product::findOrfail($id);
        return view('products.edit', compact('product'));
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
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'

        ]);

        $product = Product::findOrfail($id);
        $product->first_name = $request->get('first_name');
        $product->last_name = $request->get('last_name');
        $product->email = $request->get('email');
        $product->type = $request->get('type');
        $product->price = $request->get('price');
        if($product instanceof Product){
            $product->save();
            toastr()->success('Product Updated', 'Good');
            return  redirect('/products');
        }
        toastr()->error('An error occurred try again later');

        return back();
//        $product->save();
//
//        return redirect('/products')->with('success', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Product::findOrfail($id);

        if($product instanceof  Product){
            $product->delete();
            toastr()->success('Product deleted', 'Good');

            return redirect('/products');
        }
        toastr()->error('An error occurred try again later');

        return back();
//        $notification = array(
//            'message' => 'Thanks! Your Product has been added',
//            'alert-type' => 'success'
//        );


    }
}
