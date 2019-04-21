<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*

            $brands = Brand::all();

            if ($brands->count() === 0) {
                return responder()->error('no_brands', 'Não há Marcas registradas.')->respond();
            }
            return responder()->success($brands)->respond();
        */
        $brands = Brand::all();
        return
            ($brands->count() === 0)
            ? responder()->error('no_brands', 'Não há Marcas registradas.')->respond()
            : responder()->success($brands)->respond();
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
        $brand = new Brand;

        $brand->name = $request->name;
        $brand->description = $request->description;

        return ($brand->save())
            ? response()->json('A marca é cadastrada')
            : responder()->error('no-save', 'Falha ao salvar nova Marca.')->respond();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $brand = Brand::find($id);

        if ( $brand == null) {
            return responder()->error('no_brand', 'Solicitação inválida.')->respond();
        }
        return responder()->success($brand)->respond();
        */

        ///*  OU
        $brand = Brand::find($id);
        return ($brand)
                ? responder()->success($brand)->respond()
                : responder()->error('no_brand', 'Solicitação inválida.')->respond();

        //*/
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
        $brand = Brand::find($id);

        $brand->name = $request->name;
        $brand->description = $request->description;

        return ($brand->save())
            ? response()->json('A marca é editada')
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

            $brand = Brand::find($id);

            return ($brand->delete())
            ? response()->json('A marca e todos os produtos relativos a essa marca são removidos do
            sistema')
            : responder()->error('no-save', 'Falha ao remover a marca.')->respond();
    }
}
