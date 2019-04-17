<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return
            ($products->count() === 0)
            ? responder()->error('no_products', 'Não há produtos registrados.')->respond()
            : responder()->success($products)->respond();
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
        if (auth()->check()) {
            $product = new Product();

            $product->name = $request->name;
            $product->description = $request->description;

            // fazer o upload da image
            $nameFile = null;

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $name = uniqid(date('HisYmd'));
                $extension = $request->image->extension();
                $nameFile = "{$name}.{$extension}";

                $path = $request->image->storeAs('products', $nameFile);
            }

            $product->pathToImage = $path;

            return responder()->success($product->save())->respond();
        } else {
            return false;
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
        $product = Product::find($id);

        return ($product)
                ? responder()->success($product)->respond()
                : responder()->error('no_products', 'Produto inexistente.')->respond();
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
        if (auth()->check()) {
            $product = Product::find($id);

            $product->name = $request->name;
            $product->description = $request->description;

            return $product->save();
        } else {
            return false;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->check()) {
            $product = Product::find($id);

            return responder()->success($product->delete())->respond();
        } else {
            return responder()->error('fail_delete', 'Erro.')->respond();
            ;
        }
    }
}
