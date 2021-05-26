<?php // New File, Laravel8 CRUD. 13.05.2021 - jpm //

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulo.index')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articulo.create'); /* Modify line, Link URL - main menu & bootstrap. 17.05.2021 - jpm */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos = new Articulo();/* New line, new object, for D.D.B.B. 17.05.2021 - jpm */

        $articulos -> codigo = $request->get('codigo');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulos -> descripcion = $request->get('descripcion');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulos -> cantidad = $request->get('cantidad');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulos -> precio = $request->get('precio');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */

        $articulos -> save();/* New line, save new objecte for D.D.B.B. 17.05.2021 - jpm */

        return redirect('/articulos');
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
        $articulo = Articulo::find($id);
        return view('articulo.edit')->with('articulo',$articulo);
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
        $articulo = Articulo::find($id);/* New line, only "ID", for D.D.B.B. 17.05.2021 - jpm */

        $articulo -> codigo = $request->get('codigo');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulo -> descripcion = $request->get('descripcion');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulo -> cantidad = $request->get('cantidad');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */
        $articulo -> precio = $request->get('precio');/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */

        $articulo -> save();/* New line, save new objecte for D.D.B.B. 17.05.2021 - jpm */

        return redirect('/articulos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulo = Articulo::find($id);/* New line, only "ID", for D.D.B.B. 17.05.2021 - jpm */

        $articulo -> delete();/* New line, inputs form, for D.D.B.B. 17.05.2021 - jpm */

        return redirect('/articulos');
    }
}
