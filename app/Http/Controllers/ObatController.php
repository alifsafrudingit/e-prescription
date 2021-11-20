<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;


class ObatController extends Controller
{
    public function obat()
    {
        $data_obat = Obat::all();

        return view('obat', compact('data_obat'));
    }
    
}
