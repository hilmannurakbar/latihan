<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orang_tua;
class myController extends Controller
{
    //
   public function index()
   
   {
   	$a = "hilman nur akbar";
   	return $a;
   }

    public function tampilan() 
    {
    	$ortu = orang_tua::all();
    	return $ortu;
    } 
    public function tampilan2()
    {
    	return view ('about');
    }
    public function percobaan()
    {
    	$ortu =orang_tua::all();
    	return view ('index', compact('ortu'));
    }
    
}
