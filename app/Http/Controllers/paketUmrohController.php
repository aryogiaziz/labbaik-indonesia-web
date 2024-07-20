<?php

namespace App\Http\Controllers;

use App\Models\PaketUmroh;
use Illuminate\Http\Request;

class paketUmrohController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pakets = PaketUmroh::all();
        return view('front.packet', compact('pakets'));
    }
}
