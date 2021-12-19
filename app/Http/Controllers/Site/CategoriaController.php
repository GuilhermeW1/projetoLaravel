<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.categoria.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  $slug
     * 
     */
    public function show($slug)
    {
        return view('site.categoria.show', ['slug' => $slug]);
    }




    
}
