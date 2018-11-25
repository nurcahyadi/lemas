<?php

namespace App\Http\Controllers;

use App\umkm;
use Illuminate\Http\Request;
use Storage;

class UmkmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $umkm = umkm::all();
      // dd($article);
      return view('viewadmin.umkm.homeumkm',['umkm'=>$umkm]);
    }

    public function indexviewuser()
      {
        $umkm = umkm::all();
        // dd($article);
        return view('viewuser.daftarumkm',['umkm'=>$umkm]);
      }


      public function indexdetailumkm($id)
      {
        $umkm = umkm::where('id','=',$id)->get();
        // dd($article);
        return view('viewuser.detailumkm',['umkm'=>$umkm]);
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewadmin.umkm.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->foto_umkm) {
      $path = Storage::disk('public')->put('foto',$request->foto_umkm);
    }

        $createumkm = new umkm();
        $createumkm->nama_umkm = $request->input('nama_umkm');

        if ($request->foto_umkm) {
          $createumkm->foto_umkm = $path;
        }
        $createumkm->deskripsi_umkm = $request->input('deskripsi_umkm');
        $createumkm->alamat_umkm = $request->input('alamat_umkm');
        $createumkm->save();


      return redirect(route('homeadminumkm'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $umkmshow = umkm::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.umkm.view')->with('umkmshow', $umkmshow);
      // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $umkm = umkm::find($id);
      return view('viewadmin.umkm.edit')->with('umkm',$umkm);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $umkm = umkm::find($id);
      if ($request->foto_umkm) {
        $path = Storage::disk('public')->put('foto',$request->foto_umkm);
      } else {
        $path = $umkm->foto_umkm;
      }
      // dd($user);

    $umkm->nama_umkm = $request->nama_umkm;
    $umkm->deskripsi_umkm = $request->deskripsi_umkm;
    $umkm->alamat_umkm = $request->alamat_umkm;
    $umkm->foto_umkm = $path;

    $umkm->save();

    return redirect('/homeadminumkm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\umkm  $umkm
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $umkm = umkm::find($id);
    $delete = $umkm->delete();
    // return redirect('/homeadmin');
    return redirect('/homeadminumkm');
    }
}
