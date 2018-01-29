<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\m_soal;
use Illuminate\Support\Facades\Auth;
use Session;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = m_soal::all();
        return view('admin.index',compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'no_soal' => 'required|integer',
        'pertanyaan' => 'required|string|max:225',
        'pilihan_1' => 'required|string|max:100',
        'pilihan_2' => 'required|string|max:100',
        'pilihan_3' => 'required|string|max:100',
        'pilihan_4' => 'required|string|max:100',
        'dimensi' => 'required|string',
        ]);

        if($request->dimensi == "rd" || $request->dimensi == "as" || $request->dimensi == "ro"){

        $soal = new m_soal();
        $soal->no_soal = $request->no_soal;
        $soal->pertanyaan = $request->pertanyaan;
        $soal->pilihan_1 = $request->pilihan_1;
        $soal->pilihan_2 = $request->pilihan_2;
        $soal->pilihan_3 = $request->pilihan_3;
        $soal->pilihan_4 = $request->pilihan_4;
        $soal->dimensi = $request->dimensi;
        $soal->updateby = Auth::id();
        $soal->save();
        Session::flash('success_msg', 'Berhasil Diubah!');
        return redirect()->to('/admin');
        }else{
            Session::flash('error_msg', 'Pilih Dimensi yang ada!');
            return redirect()->to('/admin/create-soal');
        }
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
        $cek = m_soal::where('id','=', $id)->first();
        if (is_null($cek)) {
            Session::flash('error_msg', 'Data Tidak Ditemukan');
           return redirect()->to('/admin');
        }

        $this->validate($request,[
        'no_soal_edit' => 'required|integer',
        'pertanyaan_edit' => 'required|string|max:225',
        'pilihan_1_edit' => 'required|string|max:100',
        'pilihan_2_edit' => 'required|string|max:100',
        'pilihan_3_edit' => 'required|string|max:100',
        'pilihan_4_edit' => 'required|string|max:100',
        'dimensi_edit' => 'required|string',
        ]);


        $update = m_soal::find($id);
        $update->no_soal = $request->no_soal_edit;
        $update->pertanyaan = $request->pertanyaan_edit;
        $update->pilihan_1 = $request->pilihan_1_edit;
        $update->pilihan_2 = $request->pilihan_2_edit;
        $update->pilihan_3 = $request->pilihan_3_edit;
        $update->pilihan_4 = $request->pilihan_4_edit;
        $update->dimensi = $request->dimensi_edit;
        $update->updateby = Auth::id();
        $update->save();
        Session::flash('success_msg', 'Berhasil Diubah!');
        return redirect()->to('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = m_soal::where('id','=', $id)->first();
        if (is_null($cek)) {
            Session::flash('error_msg', 'Data Tidak Ditemukan!');
            return redirect()->to('/admin');
        }else{
            $delete = m_soal::where('id','=', $id)->delete();
            Session::flash('success_msg', 'Berhasil Dihapus!');
            return redirect()->to('/admin');
        }
    }
}
