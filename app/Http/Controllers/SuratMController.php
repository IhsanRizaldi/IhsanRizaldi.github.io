<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratMRequest;
use App\Models\SuratM;
use Illuminate\Http\Request;
use PDF;

class SuratMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.suratm',[
            'suratk' => new SuratM(),
            'surat' => SuratM::latest()->filter(request(['cari']))->paginate(4)->withQueryString(),
        ]);
    }
    public function printsm()
    {
        $data = SuratM::all();
        $pdf = PDF::LoadView('print.printsm',[
            'data' => $data,
            'nama' => 'Masuk'
        ]);
        return $pdf->download('Surat Masuk.pdf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SuratM $surat)
    {
        return view('surat.tambahm',[
            'surat' => $surat,
            'nama' => 'Masuk',
            'submit' => 'Tambah'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratMRequest $request)
    {
        $dok = $request->file('dok');
        $dokname = 'FT'.date('Ymdhis').'.'.$request->file('dok')->getClientOriginalExtension();
        $dok->move('dokM/',$dokname);
        
        $data = new SuratM();
        $data->no_surat = $request->no_surat;
        $data->perihal = $request->perihal;
        $data->alamat = $request->alamat;
        $data->tanggal = $request->tanggal;
        $data->dok = $request->dok;
        $data->dok = $dokname;
        $data->save();

        return redirect('/surat_masuk')->with('success','Anda telah berhasil menambahkan data');
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
    public function edit(SuratM $surat,$id)
    {
        $surat = SuratM::where('id',$id)->first();
        return view('surat.editm',[
            'surat' => $surat,
            'nama'=>'Masuk',
            'submit'=>'Ubah'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(SuratMRequest $request, $id)
    {
        $dok = $request->file('dok');
        $dokname = 'FT'.date('Ymdhis').'.'.$request->file('dok')->getClientOriginalExtension();
        $dok->move('dokM/',$dokname);
        
        $surat = SuratM::find($id)->update([
            'no_surat'=>$request->no_surat,
            'perihal'=>$request->perihal,
            'alamat'=>$request->alamat,
            'tanggal'=>$request->tanggal,
            'dok'=>$request->dok = $dokname,
        ]);
        return redirect('/surat_masuk')->with('primary','Anda telah berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratM::find($id)->delete();

        return redirect('/surat_masuk')->with('danger','Anda telah berhasil menghapus data');
    }
}
