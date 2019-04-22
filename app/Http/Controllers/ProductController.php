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
        //return response()->json($request->file('img')->isValid());

        $product = new Product();

        $product->name = $request->name;
        $product->description = $request->description;

        // return response()->json($product);
        // fazer o upload da image
        $nameFile = null;

        if ($request->hasFile('img') && $request->file('img')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->img->extension();
            $nameFile = "{$name}.{$extension}";

            $path = $request->img->storeAs('uploads/products', $nameFile);
        } else {
            return response()->json('XXXXXXXXXx');
        }

        $product->pathToImage = Storage::url($path);

        $idBrand = (int) $request->idBrand;

        $brand = \App\Models\Brand::find($idBrand);

        return ($brand->products()->save($product))
            ? response()->json('O produto é cadastrado')
            : response()->json('O cadastro FALHOU');
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
//        $product->path
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
        // return response()->json($request->input());

        $product = Product::find($id);

        $product->brand()->dissociate();

        $product->name = $request->name;
        $product->description = $request->description;

        $brand_id = (int) $request->brand_id;

        $brand = \App\Models\Brand::find($brand_id);

        return ($brand->products()->save($product))
            ? response()->json('O produto é editado')
            : responder()->error('no-save', 'Falha ao editar Marca.')->respond();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        return ($product->delete())
            ? response()->json('O produto é removido do sistema')
            : responder()->error('no-save', 'Falha ao remover o produto.')->respond();
    }
}
