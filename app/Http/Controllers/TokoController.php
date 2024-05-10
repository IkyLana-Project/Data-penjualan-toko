<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;

class TokoController extends Controller
{
    public function index(){
        $toko = Toko::all();
        return view('toko.index',compact(['toko']));
    }

    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        //dd($request->except(['_token','submit']));
        Toko::create($request->except(['_token','submit']));
        return redirect('/toko');
    }

    function getToko(Toko $toko)
    {
        return view('toko.edit',compact(['toko']));
    }

    public function update(Request $request, $id)
    {
        $toko = Toko::find($id);
        $toko->update($request->except(['_token','submit']));
        return redirect('/toko');
    }

    public function destroy($id)
    {
        $toko = Toko::find($id);
        $toko->delete();
        return redirect('/toko');
    }
}
