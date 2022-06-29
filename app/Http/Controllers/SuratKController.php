<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuratKRequest;
use App\Models\SuratK;
use Illuminate\Http\Request;

use PDF;

class SuratKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('surat.suratk',[
            'suratk' => new SuratK,
            'surat' => SuratK::latest()->filter(request(['cari']))->paginate(4)->withQueryString(),
        ]);
    }
    public function printsk()
    {
        $data = SuratK::all();
        $pdf = PDF::LoadView('print.printsk',[
            'data' => $data,
            'nama' => 'keluar'
        ]);
        return $pdf->download('Surat Keluar.pdf');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(SuratK $surat)
    {
        return view('surat.tambahk',[
            'surat' => $surat,
            'nama' => 'Keluar',
            'submit' => 'Tambah',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuratKRequest $request)
    {

        $dok = $request->file('dok');
        $dokname = 'FT'.date('Ymdhis').'.'.$request->file('dok')->getClientOriginalExtension();
        $dok->move('dokK/',$dokname);
        
        $data = new SuratK();
        $data->no_surat = $request->no_surat;
        $data->perihal = $request->perihal;
        $data->alamat = $request->alamat;
        $data->tanggal = $request->tanggal;
        $data->dok = $request->dok;
        $data->dok = $dokname;
        $data->save();

        return redirect('/surat_keluar')->with('success','Anda telah berhasil menambahkan data');
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
    public function edit(SuratK $surat, $id)
    {
        
        $surat = SuratK::where('id',$id)->first();
        return view('surat.editk',[
            'surat' => $surat,
            'nama'=>'Keluar',
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
    public function update(SuratKRequest $request, $id)
    {
        $dok = $request->file('dok');
        $dokname = 'FT'.date('Ymdhis').'.'.$request->file('dok')->getClientOriginalExtension();
        $dok->move('dokK/',$dokname);
        $surat = SuratK::find($id)->update([
            'no_surat'=>$request->no_surat,
            'perihal'=>$request->perihal,
            'alamat'=>$request->alamat,
            'tanggal'=>$request->tanggal,
            'dok'=>$request->dok = $dokname,
        ]);
        return redirect('/surat_keluar')->with('primary','Anda telah berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SuratK::find($id)->delete();

        return redirect('/surat_keluar')->with('danger','Anda telah berhasil menghapus data');
    }
}
