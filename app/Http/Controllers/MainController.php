<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\responden;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
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
        $responden = new responden();
        $responden->usia = "1";
        $responden->jenis_kelamin = "L";
        $responden->kota_id = "1";
        $responden->provinsi_id = "1";
        $responden->pekerjaan_id = "1";
        $responden->suku_id = "1";
        $responden->status_pernikahan = "lajang";
        $responden->pendidikan_terakhir_id = "SD";
        $responden->tinggal_bersama_id = "1";
        $responden->penghasilan = "1";
        $responden->pengeluaran = "1";
        $responden->jawaban_1 = $request->jawaban_1; 
        $responden->jawaban_2 = $request->jawaban_2; 
        $responden->jawaban_3 = $request->jawaban_3; 
        $responden->jawaban_4 = $request->jawaban_4; 
        $responden->jawaban_5 = $request->jawaban_5; 
        $responden->jawaban_6 = $request->jawaban_6; 
        $responden->jawaban_7 = $request->jawaban_7; 
        $responden->jawaban_8 = $request->jawaban_8; 
        $responden->jawaban_9 = $request->jawaban_9; 
        $responden->jawaban_10 = $request->jawaban_10; 
        $responden->jawaban_11 = $request->jawaban_11; 
        $responden->jawaban_12 = $request->jawaban_12; 
        $responden->jawaban_13 = $request->jawaban_13; 
        $responden->jawaban_14 = $request->jawaban_14; 
        $responden->jawaban_15 = $request->jawaban_15; 
        $responden->jawaban_16 = $request->jawaban_16; 
        $responden->jawaban_17 = $request->jawaban_17; 
        $responden->jawaban_18 = $request->jawaban_18; 
        $responden->jawaban_19 = $request->jawaban_19; 
        $responden->jawaban_20 = $request->jawaban_20; 
        $responden->jawaban_21 = $request->jawaban_21; 
        $responden->jawaban_22 = $request->jawaban_22; 
        $responden->jawaban_23 = $request->jawaban_23; 
        $responden->jawaban_24 = $request->jawaban_24; 
        $responden->jawaban_25 = $request->jawaban_25; 
        $responden->jawaban_26 = $request->jawaban_26; 
        $responden->jawaban_27 = $request->jawaban_27; 
        $responden->jawaban_28 = $request->jawaban_28; 
        $responden->jawaban_29 = $request->jawaban_29; 
        $responden->jawaban_30 = $request->jawaban_30; 
        $responden->jawaban_31 = $request->jawaban_31; 
        $responden->jawaban_32 = $request->jawaban_32; 
        $responden->jawaban_33 = $request->jawaban_33; 
        $responden->jawaban_34 = $request->jawaban_34; 
        $responden->jawaban_35 = $request->jawaban_35; 
        $responden->jawaban_36 = $request->jawaban_36; 
        $responden->jawaban_37 = $request->jawaban_37; 
        $responden->jawaban_38 = $request->jawaban_38; 
        $responden->jawaban_39 = $request->jawaban_39; 
        $responden->jawaban_40 = $request->jawaban_40; 
        $responden->jawaban_41 = $request->jawaban_41; 
        $responden->jawaban_42 = $request->jawaban_42; 
        $responden->jawaban_43 = $request->jawaban_43; 
        $responden->jawaban_44 = $request->jawaban_44; 
        $responden->jawaban_45 = $request->jawaban_45; 
        $responden->jawaban_46 = $request->jawaban_46; 
        $responden->jawaban_47 = $request->jawaban_47; 
        $responden->jawaban_48 = $request->jawaban_48; 
        $responden->jawaban_49 = $request->jawaban_49; 
        $responden->jawaban_50 = $request->jawaban_50; 
        $responden->jawaban_51 = $request->jawaban_51; 
        $responden->jawaban_52 = $request->jawaban_52; 
        $responden->jawaban_53 = $request->jawaban_53; 
        $responden->jawaban_54 = $request->jawaban_54; 
        $responden->jawaban_55 = $request->jawaban_55; 
        $responden->jawaban_56 = $request->jawaban_56; 
        $responden->jawaban_57 = $request->jawaban_57; 
        $responden->jawaban_58 = $request->jawaban_58; 
        $responden->jawaban_59 = $request->jawaban_59; 
        $responden->jawaban_60 = $request->jawaban_60;
        $responden->dimensi_rd = "1";
        $responden->dimensi_as = "1";
        $responden->dimensi_ro = "1";
        $responden->updateby = "1";
        $responden->save();
        return redirect()->to('/satker');
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
