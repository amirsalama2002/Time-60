<?php

namespace App\Http\Controllers;

use App\Models\Prodect;
use Illuminate\Http\Request;

class ProdectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {
        $pro = Prodect::all();
        return view('prodect.index',['pro'=>$pro]);
    }

   
    public function create()
    {
        return view('prodect.create');
    }

    
    public function store(Request $request)
    {
        $date = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'number'=>'required',
        ]);
        Prodect::create($date);
        return redirect()->route('prodect.index');
    }

    
    public function show(Prodect $prodect)
    {
        return view('prodect.show');
    }

    
    public function edit(Prodect $prodect)
    {
        $nm = $prodect;
        return view('prodect.edit',['nm'=>$nm]);
    }

    
    public function update(Request $request, Prodect $prodect)
    {
        $date = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'number'=>'required',
        ]);
        $prodect->update($date);
        return redirect()->route('prodect.index');
    }

    
    public function destroy(Prodect $prodect)
    {
        $prodect->delete();
        return redirect()->route('prodect.index');
    }
}
