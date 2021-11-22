<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Signa;
use Illuminate\Http\Request;
use App\Models\ResepNonRacik;

class ResepNonRacikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_obat = Obat::all();
        $data_signa = Signa::all();

        // return $request;
        return view('resepNonRacik', compact('data_obat', 'data_signa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $this->validate($request, [
            'obat' => ['required'],
            'signa' => ['required'],
            'qty' => ['required']
        ]);

        $resepNonRacik = new ResepNonRacik;
        
        foreach ($request->obat as $value) {
            $resep_get[] = [
                'id_resep_non_racik' => $resepNonRacik->id,
                'id_obat' => $value,
                'qty' => $request->qty
            ];

            $obat = Obat::find($value);
            $stok_obat = $obat->stok - $obat_get->qty;
            $obat->update(['stok' => $stok_obat]);
        }

        DetailResepNonRacik::create($obat_get);


        return $resepNonRacik;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
